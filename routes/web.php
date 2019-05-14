<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* while post remember to user Auth\controllername so you can get the perfect path for the custom login  */
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/dokter/create', 'DokterController@create');
Route::get('/dokter/{id}/Rx1', 'ResepDokter@indexku');
Route::post('/admin/adduser', 'AdminController@adduser');
Route::get('/authDokter/login ', 'AuthDokter@auth');
Route::post('/dokter/login', 'AuthDokter@login');
Route::get('/dokter/logout', 'AuthDokter@logout');
Route::get('/dokter/index', 'AuthDokter@index');
Route::get('/dokter/index', 'AuthDokter@data');
Route::get('welcome', 'AuthDokter@welcome');
Route::get('/admin/doctors_data', 'DokterController@index')->name('Doctors Data');
Route::get('/dokter/{id}/edit', 'DokterController@edit' );
Route::post('/dokter/{id}/update', 'DokterController@update');
Route::get('/dokter/{id}/delete', 'DokterController@delete' );
Route::get('/dokter/{id}/view', 'DokterController@view' );
Route::post('/dokter/{id}/addschedule', 'DokterController@addschedule')->name('Add Schedule');
Route::get('/admin/jadwal', 'DokterController@dataschedule')->name('Doctors Schedule');
Route::get('/dokter/{id}/editjadwal', 'DokterController@editjadwal' );
Route::get('/dokter/{id}/deletejadwal', 'DokterController@deletejadwal' );
Route::post('/dokter/{id}/updatejadwal', 'DokterController@updatejadwal');
Route::get('/dokter/{id}/detailjadwal', 'DokterController@detailjadwal');
Route::get('/dokter/caridokter','DokterController@caridokter');
Route::get('/dokter/{id}/detailjadwal2', 'DokterController@detailjadwal2');
Route::get('/frontoffice/doctorschedule', 'DokterController@schedule_show');
Route::get('/frontoffice/visit', 'DokterController@doctor')->name('Doctors Data');
Route::post('/pasien/create', 'FrontofficeController@create');
Route::get('/frontoffice/pendaftaranpasien', 'FrontofficeController@index');
Route::get('/frontoffice/pasiendata', 'FrontofficeController@pasien_data');
Route::get('/pasien/{id}/edit', 'FrontofficeController@edit' );
Route::post('/pasien/{id}/update', 'FrontofficeController@update');
Route::get('/pasien/{id}/delete', 'FrontofficeController@delete' );
Route::get('/pasien/{id}/read', 'FrontofficeController@read' );
Route::post('/visit/create', 'VisitController@create');
Route::get('/frontoffice/datavisit', 'VisitController@index');
Route::get('/visit/{id}/edit', 'VisitController@edit');
Route::get('/visit/{id}/editstatus', 'VisitController@editstatus');
Route::post('/visit/{id}/updatestatus', 'VisitController@updatestatus');
Route::post('/visit/{id}/updatestatus_obat', 'VisitController@updatestatus_obat');
Route::post('/visit/{id}/updatestatusobat', 'ObatController@updatestatusobat');
Route::post('/visit/{id}/update', 'VisitController@update');
Route::get('/visit/{id}/delete', 'VisitController@delete');
Route::get('/dokter/visitor', 'VisitController@visitor1');
Route::get('/visit/{id}/getrecord', 'VisitController@getrecord');
Route::post('/dokter/record', 'RekammedisController@fetch')->name('diagnosa.fetch');
Route::get('/dokter/record', 'RekammedisController@showfetch');
Route::post('/medical/create', 'RekammedisController@create');
Route::get('/medical/{id}/edit', 'RekammedisController@edit');
Route::get('/visit/{id}/history', 'RekammedisController@riwayat');
Route::post('/medical/{id}/update', 'RekammedisController@update');
Route::get('/medical/{id}/delete', 'RekammedisController@delete');
Route::get('/visit/{id}/detailhistory', 'FrontofficeController@history');
Route::get('/visit/{id}/rx', 'VisitController@getRx');
Route::get('/pasien/{id}/history', 'FrontofficeController@historypatient');
Route::post('/addobat', 'ObatController@create');
Route::get('/apoteker/obat', 'ObatController@index');
Route::get('/rx/{id}/delete', 'ResepDokter@delete' );
Route::get('/edit/{id}/obat', 'ObatController@edit');
Route::post('/update/{id}/obat', 'ObatController@update');
Route::get('/delete/{id}/obat', 'ObatController@delete');
Route::post('/addPost/{id}','ResepDokter@addPost');
Route::post('/dokter/Rx1', 'ResepDokter@fetchobat')->name('obat.fetch');
Route::post('/editPost','PostController@editPost');
Route::get('/delete/{id}','ResepDokter@delete');

Route::get('/apoteker/index','ObatController@index_apoteker');
Route::get('/apoteker/resepobat','ObatController@resepobat');
Route::get('/apoteker/{id}/detailresep','ObatController@resepobatdetail')->name('detail');
Route::get('/findid/{id}','ObatController@findobat');
Route::post('/{id}/updatestatus', 'DokterController@updatestatus');
Route::get('/frontoffice/doctor', 'DokterController@doctor');
Route::get('/hargaobat','ObatController@hargaobat');
Route::resource('apoteker/cart', 'OrderController');
Route::get('/apoteker/cart ', 'ObatController@cart');
Route::get('cart/remove/{rowId}', 'ObatController@removeItem');
Route::get('cart/updatecart/','ObatController@update');
Route::get('apoteker/checkout', 'checkout@index');
Route::post('placeOrder','checkout@placeOrder');
Route::get('thankyou',function(){
  return view('apoteker/resepobat');
});
Route::get('apoteker/transaction','penjualan@index');
Route::get('/yajra','penjualan@yajra');
Route::get('/get/{id}','penjualan@get');
Route::post('/submit/{code}','penjualan@submit');
Route::get('/hapus-temp/{id}/{code}','penjualan@hapus_temp');
Route::post('/selesai/{code}/{total}','penjualan@selesai');
Route::get('/hapus-transaksi/{code}','penjualan@hapus_transaksi');
Route::post('/simpan-transaksi/{code}','penjualan@simpan_transaksi');
Route::get('/open-transaksi/{code}','penjualan@open_transaksi');
Route::get('/new-transaksi/{code}','penjualan@new_transaction');

Route::get('kasir/transaksi','KasirController@index');
Route::get('/yajrakasir','KasirController@yajra');
Route::get('/getkasir/{id}','KasirController@get');
Route::post('/submitkasir/{code}','KasirController@submit');
Route::get('/hapus-tempkasir/{id}/{code}','KasirController@hapus_temp');
Route::post('/selesaikasir/{code}/{total}','KasirController@selesai');
Route::get('/hapus-transaksikasir/{code}','KasirController@hapus_transaksikasir');
Route::post('/simpan-transaksikasir/{code}','KasirController@simpan_transaksikasir');
Route::get('/open-transaksikasir/{code}','KasirController@open_transaksi');
Route::get('/new-transaksikasir/{code}','KasirController@new_transaction');

Route::get('/kasir/transaksi_tanggal','KasirController@transaksipage');
Route::get('/kasir/datatransaksi','KasirController@datatransaksi');
Route::get('/kasir/datatransaksi/yajraku','KasirController@yajraku');
Route::get('/kasir/index','KasirController@periksa');
Route::get('/kasir/datatransaksi/yajra/{tgl1}/{tgl2}','KasirController@yajra_tanggal');

Route::get('admin/index','AdminController@adminindex');
Route::post('resepsionis/store','pegawai@store');
Route::post('admin/storeadmin','pegawai@storeadmin');
Route::post('admin/usercrete','pegawai@createuser');
Route::get('user/delete/{id}', 'AdminController@delete');
Route::get('resepsionis/delete/{id}', 'pegawai@deletefront');
Route::get('admin/patientreport', 'AdminController@datapasien');
Route::get('admin/salesreport', 'AdminController@datatransaksi');
Route::get('admin/drugreport', 'AdminController@dataobat');

Route::get('/authadmin/login ', 'AdminController@authadmin');
Route::post('/admin/loginadmin', 'AdminController@loginadmin');
Route::get('/admin/logout', 'AdminController@logoutadmin');
Route::get('/admin/index', 'AdminController@indexadmin');
