@extends ('layouts.app2')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Medicine Transaction</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

          <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
  </head>
  <body style="background-color:lightgrey;">

    @section('navbar')
    <ul class="nav nav-tabs">
      <li class="nav-item" style="font-size:12px;">
        <a   style="color:white;"  href='{{url('apoteker/index')}}'>Darshboard</a>
      </li>
    <li class="nav-item" style="font-size:12px;">
      <a  style="color:white;" class="nav-link " href='{{url('apoteker/obat')}}'>Medicine Data</a>
    </li>

    <li class="nav-item" style="font-size:12px;">
      <a  style="color:white;" class="nav-link " href='{{url('apoteker/resepobat')}}'>Doctor's Prescription </a>
    </li>
    <li><a class="nav-link active" href="{{ url('new-transaksi/'.$code) }}">New Medicine Transaction <span class="glyphicon glyphicon-saved" aria-hidden="true"></span></a></li>
    <li class="dropdown">
  <a style="color:white;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> Stored Transaction </a>
                         <ul class="dropdown-menu">
                           <?php
                             $tersimpan = \DB::table('save_transaksis')->get();
                           ?>
                           @foreach($tersimpan as $ts)
                           <li><a href="{{ url('open-transaksi/'.$ts->code) }}">{{ $ts->nama }}</a></li>
                           @endforeach
                         </ul>
                       </li>
  </ul>
    @endsection
    @section('content')

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

      </div>
@section ('isi')
<div class="wrapper" style="border-radius:25px;">
    <div class="container-fluid" style="background-color:#203e4a; border-radius:10px;border-style:solid; border-color:lightblue;height:100%;">
      <hr>

      <?php
                      $total = 0;
                  ?>

                  <article class="part card-details">

                  <div class="row">
                      <div class="col-6">

                          <div class="panel panel-default bg" >
                              <table class="table table-bordered table-barang">
                                  <thead>
                                      <tr>
                                          <th>#</th>
                                          <th>Nama</th>
                                      </tr>
                                  </thead>
                              </table>
                          </div>

                      </div>
                      <div class="col-6">

                          <div class="panel panel-default bg">
                              <form action="{{ url('submit/'.$code) }}" method="POST">
                                  {{ csrf_field() }}
                                <div class="row">

                                    <div class="col-md-8">
                                        <div class="form-group">
                                          <label for="exampleInputEmail1">Medicine</label>
                                          <input type="text" name="nm_obat" class="form-control" id="exampleInputEmail1" placeholder="Medicine" disabled="">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                          <label for="exampleInputPassword1">Price (Rp)</label>
                                          <input type="number" name="harga_awal" class="form-control" id="exampleInputPassword1" placeholder="price" disabled="">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">

                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                          <label for="exampleInputEmail1">Qty</label>
                                          <input type="number" name="qty" value="1" class="form-control" id="exampleInputEmail1" placeholder="Nama" >
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" value="">
                                </div>

                                <button type="submit" class="btn btn-primary btn-block btn-success btn-submit"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Submit</button>
                                <img src="{{ asset('image/loading.gif') }}" style="display: none;" class="loading">
                              </form>
                          </div>

                      </div>
                  </div>
                  <!-- End Content -->

                  <div class="row">
                      <div class="col-md-12">
                          <table class="table table-bordered" style="color:white">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>Nama</th>
                                      <th>Qty</th>
                                      <th>Sub Total</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php
                                      $data = \DB::table('temp_transaksi')->where('code',$code)->get();

                                  ?>
                                  @foreach($data as $index=>$dt)
                                  <tr>
                                      <td>{{ $index+1 }}</td>
                                      <td>{{ \DB::table('obats')->where('id',$dt->barang_id)->value('nm_obat') }}</td>
                                      <td>{{ $dt->qty }}</td>
                                      <?php
                                          $hrg = \DB::table('obats')->where('id',$dt->barang_id)->value('harga');
                                          $qty = $dt->qty;
                                          $sub = $hrg * $qty;
                                          $total += $sub;
                                      ?>
                                      <td>Rp. {{$sub }}</td>
                                      <td><a href="{{ url('hapus-temp/'.$dt->temp_transaksi_id.'/'.$code) }}" class="btn btn-danger">Delete <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
                                  </tr>
                                  @endforeach
                                    <td colspan="5" style="text-align:center; "> <strong>Total <span>Rp. {{ $total }}</span></strong></td><br>
                                  <tr>

                                      <?php
                                        $cek = count(\DB::table('save_transaksis')->where('code',$code)->get());
                                        $namaTrans = \DB::table('save_transaksis')->where('code',$code)->value('nama');
                                      ?>
                                      @if($cek > 0)
                                      <td colspan="5"><a href="" class="btn btn-block btn-success btn-simpan disabled"><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> Invoice Number Transaction : {{$namaTrans}} (Saved  )</a></td>
                                      @else
                                      <td colspan="5"><a data-toggle='modal' href="#modal-simpan-transaksi" class="btn btn-block btn-success btn-simpan"><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span>Save Transaction</a></td>
                                      @endif
                                  </tr>
                                  <tr>
                                      <td colspan="5"><a  data-toggle='modal' href="#modal-hapus-transaksi" class="btn btn-block btn-warning btn-hapus"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Delete Transaction</a></td>
                                  </tr>

                              </tbody>
                          </table>
                      </div>

                  </div>

              </div>

              <!-- Modal Kembalian -->
              <div class="modal modal-danger fade" id="modal-kembalian">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                      <h1><b><i class="kembalian"></i></b></h1>
                    </div>
                    <div class="modal-footer">
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>

              <!-- Modal Hapus Transaksi -->
              <div class="modal modal-danger fade" id="modal-hapus-transaksi" >
                <div class="modal-dialog">
                  <div class="modal-content" style="background-color:maroon;">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                      <h4 class="modal-title">x</h4>
                    </div>
                    <div class="modal-body">
                      <h4 style="color:white;"><b><i>Are you sure want to delete data ?</i></b></h4>
                    </div>
                    <div class="modal-footer">
                      <a href="{{ url('hapus-transaksi/'.$code) }}" class="btn btn-outline btn-warning">Yes</a>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>

              <!-- Modal Simpan Transaksi -->
              <div class="modal modal-danger fade" id="modal-simpan-transaksi">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header"style="background-color:darkgreen;">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>

                    </div>
                    <h4 class="modal-title" style="text-align:center;">Save Transaction</h4><hr>
                    <div class="modal-body">

                      <form role="form" action="{{ url('simpan-transaksi/'.$code) }}" method="POST">
                        {{ csrf_field() }}
                          <div class="form-group">
                            <label for="">invoice</label>
                              <input type="text" class="form-control" name="nama" placeholder="Invoice"><hr>
                              <label for="">Visitor ID</label>
                              <select class="form-control" name="user_id">
                                <option>choose...</option>
                                @foreach($visit as $visit)
                                <option value="{{$visit->id}}">{{$visit->id}}</option>
                                @endforeach
                              </select>
                          </div>

                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-outline btn-danger">Yakin</button>
                    </div>
                  </form>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>

              <script src="{{asset('adminlte/bower_components/jquery/dist/jquery.min.js')}}"></script>
              <!-- jQuery UI 1.11.4 -->
              <script src="{{asset('adminlte/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>

              <!-- Latest compiled and minified JavaScript -->
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


              <script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

              <script type="text/javascript">
                  $(document).ready(function(){
                      var flash = "{{ Session::has('pesan') }}";
                      if(flash){
                          var pesan = "{{ Session::get('pesan') }}";
                          $('.kembalian').text(pesan);
                          $('#modal-kembalian').modal();
                      }

                      var total = "{{ 'Rp. '.number_format($total,0) }}";
                      $('.total').text(total);

                      $('div.dataTables_filter input').focus();

                      $('.table-barang').DataTable({
                          "pageLength": 5,
                          processing: true,
                          serverSide: true,
                          ajax: "{{ url('yajra') }}",
                          columns: [
                              // or just disable search since it's not really searchable. just add searchable:false
                              {data: 'rownum', name: 'rownum'},
                              {data: 'nm_obat', name: 'nm_obat'},

                          ]
                      });

                      // Ketika nama barang di klik
                      $('body').on('click','.btn-barang',function(e){
                          e.preventDefault();
                          $(this).closest('tr').find('.loading').show();
                          var id = $(this).attr('id');
                          var url = "{{ url('get') }}"+'/'+id;
                          var _this = $(this);

                          $.ajax({
                              type:'get',
                              url:url,
                              success:function(data){
                                  console.log(data);

                                  $("input[name='nm_obat']").val(data.nm_obat);
                                  $("input[name='harga_awal']").val(data.harga);
                                  $("input[name='id']").val(data.id);

                                  _this.closest('tr').find('.loading').hide();
                              }
                          })
                      });

                      // Ketika submit di klik
                      $('.btn-submit').click(function(e){
                          e.preventDefault();
                          var nm_obat = $("input[name='nm_obat']").val();
                          if(nm_obat == ''){
                              // swal('Warning','Barang wajib dipilih terlebih dahulu','warning');
                              alert('Barang wajib dipilih terlebih dahulu');
                          }else{
                              $(this).addClass('disabled');
                              $(this).closest('form').submit();
                          }
                      })

                      // Ketika btn selesai di klik
                      $('.btn-selesai').click(function(e){
                          e.preventDefault();
                          var total = "{{ $total }}";
                          var bayar = $("input[name='bayar']").val();

                          if(bayar < total){
                              alert('Uang Kurang');
                          }else{
                              $(this).closest('form').submit();
                          }

                      })

                      $(document).keypress(function(e){
                          if(e.which == 13){
                              $('div.dataTables_filter input').focus();
                              // $("Input[name='bayar']").focus();
                          }
                      })

                      $(document).keypress(function(e){
                          if(e.which == 118){
                              // $('div.dataTables_filter input').focus();
                              $("Input[name='bayar']").focus();
                          }
                      })

                      // Ketika btn hapus transaksi di klik
                      $('.btn-hapus').click(function(e){
                          e.preventDefault();
                          $('#modal-hapus-transaksi').modal();
                      })

                      // Ketika btn simpan transaksi disimpan
                      $('.btn-simpan').click(function(e){
                          e.preventDefault();
                          $('#modal-simpan-transaksi').modal();
                      })

                  })
              </script>

        </article>
      </div>
    </div>

@endsection
  </body>
</html>
@endsection
