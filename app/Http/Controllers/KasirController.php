<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use DB;
use Uuid;
use Session;
class KasirController extends Controller
{

        public function index(){
          $visit=DB::table('visits')->get();
          $code = \DB::table('code')->where('code_id',1)->value('code');
          if($code == '0'){
            $code = Uuid::generate(4);

        }

          return view('kasir/transaksi',['code'=>$code, 'visit'=>$visit]);
        }

        public function get($id){
          $barang = \DB::table('obats')->where('id',$id)->first();
          return response()->json([
            'id'=>$barang->id,
            'nm_obat'=>$barang->nm_obat,
            'harga'=>$barang->harga,
            'ket'=>$barang->ket,

          ]);
        }

        public function submit(Request $request, $code){
          $barang_id = $request->id;
          $qty = $request->qty;

          \DB::table('code')->where('code_id',1)->update([
            'code'=>$code,
          ]);

          $cek = count(\DB::table('temp_transaksi')->where('barang_id',$barang_id)->where('code',$code)->get());
          if($cek > 0){
            $qtyNow = \DB::table('temp_transaksi')->where('barang_id',$barang_id)->where('code',$code)->value('qty');
            \DB::table('temp_transaksi')->where('barang_id',$barang_id)->where('code',$code)->update([
              'qty'=>$qtyNow+$qty
            ]);
          }else{
            \DB::table('temp_transaksi')->insert([
              'temp_transaksi_id'=>Uuid::generate(4),
              'code'=>$code,
              'barang_id'=>$barang_id,
              'qty'=>$qty
            ]);
          }

          return redirect('kasir/transaksi');
        }

        public function hapus_temp($id,$code){
          \DB::table('temp_transaksi')->where('temp_transaksi_id',$id)->where('code',$code)->delete();
          return redirect('kasir/transaksi');
        }

        public function selesai(Request $request,$code, $total){
          // $total = $request->total;
          $bayar = $request->bayar;
    	$data = \DB::table('temp_transaksi')->where('code',$code)->get();

    	foreach ($data as $key => $dt) {
    		\DB::table('sale')->insert([
    			'sale_id'=>Uuid::generate(4),
    			'barang_id'=>$dt->barang_id,
    			'qty'=>$dt->qty,
    			'total'=>$total,
    			'tanggal'=>date("Y-m-d H:i:s")
    		]);
    	}

    	\DB::table('code')->where('code_id',1)->update([
    		'code'=>0
    	]);

    	\DB::table('temp_transaksi')->where('code',$code)->delete();
        \DB::table('save_transaksis')->where('code',$code)->delete();
    	$kembalian = $bayar - $total;
    	Session::flash('pesan','Kembalian: Rp. '.number_format($kembalian,0));


          return redirect('kasir/transaksi');
        }

        public function hapus_transaksikasir($code){
          \DB::table('save_transaksis')->where('code',$code)->delete();
            \DB::table('code')->where('code_id',1)->update([
                'code'=>0
            ]);
            \DB::table('save_transaksis')->where('code',$code)->delete();

            return redirect('kasir/transaksi');
        }

        public function simpan_transaksikasir(Request $request, $code){
            \DB::table('save_transaksis')->insert([
                'save_transaksi_id'=>Uuid::generate(4),
                'code'=>$code,
                'nama'=>$request->nama,
                'user_id'=>$request->user_id
            ]);

            DB::table('code')->where('code_id',1)->update([
                'code'=>0
            ]);

            Session::flash('pesan','Transaksi Tersimpan');

            return redirect('kasir/transaksi');
        }

        public function open_transaksi($code){
            \DB::table('code')->where('code_id',1)->update([
                'code'=>$code
            ]);

              return redirect('kasir/transaksi');
        }

        public function new_transaction($code){
            $cek = count(\DB::table('save_transaksi')->where('code',$code)->get());
            if($cek < 1){
                \DB::table('temp_transaksi')->where('code',$code)->delete();
            }
            \DB::table('code')->where('code_id',1)->update([
                'code'=>0
            ]);

            return redirect('kasir/transaksi');
        }

        public function yajra(Request $request){
          DB::statement(DB::raw('set @rownum=0'));
            $barang = DB::table('obats')->select([
                DB::raw('@rownum  := @rownum  + 1 AS rownum'),
                  'id',
                  'nm_obat',
              ]);
            $datatables = Datatables::of($barang)->editColumn('nm_obat',function($barang){
              $id = $barang->id;
              $gambar = asset('image/loading.gif');
              return '<span id="'.$id.'" style="cursor:pointer;" class="btn-barang">'.$barang->nm_obat.'</span>'.'<img src="'.$gambar.'" style="display:none;" class="loading">';
            })->rawColumns(['nm_obat']);

            if ($keyword = $request->get('search')['value']) {
                $datatables->filterColumn('rownum', 'whereRaw', '@rownum  + 1 like ?', ["%{$keyword}%"]);
            }

            return $datatables->make(true);
        }


public function transaksipage()
{

  return view ('kasir/transaksi_tanggal');
}
        public function datatransaksi(){
            $data= DB::table('sale')
            ->join('obats','obats.id','=','sale.barang_id')->get();

            	return view('kasir/datatransaksi',compact('data'));
            }

            public function periksa(Request $request){


            	return view('kasir/index');
            }

            public function yajraku(Request $request){
            	$barang = DB::table('sale')->select([
            		'barang_id',
            		'sale_id',
            		'qty',
            		'total',
            		'tanggal'
            	]);

                return Datatables::of($barang)
                    ->editColumn('barang_id',function($harga){
                        $barang_id = $harga->barang_id;
                        $nama = \DB::table('barang')->where('barang_id',$barang_id)->value('nama');
                        return $nama;
                    })->editColumn('total',function($harga){
                        $total = $harga->total;
                        return 'Rp. '.number_format($total,0);
                    })->editColumn('tanggal',function($e){
                        $tanggal = $e->tanggal;
                        return date("d-M-Y",strtotime($tanggal));
                    })->make(true);
        	}

        	public function yajra_tanggal(Request $request, $tgl1, $tgl2){
                $tanggal1 = date("Y-m-d", strtotime($tgl1));
                $tanggal2 = date("Y-m-d", strtotime($tgl2));

        		$barang = DB::table('sale')->select([
            		'barang_id',
            		'sale_id',
            		'qty',
            		'total',
            		'tanggal'
            	]);

                return Datatables::of($barang)
                    ->editColumn('barang_id',function($harga){
                        $barang_id = $harga->barang_id;
                        $nama = \DB::table('barang')->where('barang_id',$barang_id)->value('nama');
                        return $nama;
                    })->editColumn('total',function($harga){
                        $total = $harga->total;
                        return 'Rp. '.number_format($total,0);
                    })->editColumn('tanggal',function($e){
                        $tanggal = $e->tanggal;
                        return date("d-M-Y",strtotime($tanggal));
                    })->whereBetween('tanggal',[$tanggal1,$tanggal2])->make(true);
        	}
        }
