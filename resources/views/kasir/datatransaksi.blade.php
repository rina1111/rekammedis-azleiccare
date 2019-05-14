<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
<!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('adminlte/bower_components/font-awesome/css/font-awesome.min.css')}}">
<!-- Ionicons -->
<link rel="stylesheet" href="{{asset('adminlte/bower_components/Ionicons/css/ionicons.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('adminlte/dist/css/AdminLTE.min.css')}}">
<!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="{{asset('adminlte/dist/css/skins/_all-skins.min.css')}}">
<!-- Morris chart -->
<link rel="stylesheet" href="{{asset('adminlte/bower_components/morris.js/morris.css')}}">
<!-- jvectormap -->
<link rel="stylesheet" href="{{asset('adminlte/bower_components/jvectormap/jquery-jvectormap.css')}}">
<!-- Date Picker -->
<link rel="stylesheet" href="{{asset('adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
<!-- bootstrap colorpicker -->
<link rel="stylesheet" type="text/css" href="{{asset('adminlte/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">
<!-- bootstrap time picker -->
<link rel="stylesheet" type="text/css" href="{{asset('adminlte/plugins/timepicker/bootstrap-timepicker.min.css')}}">
<!-- Daterange picker -->
<link rel="stylesheet" href="{{asset('adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
<!-- select2 -->
<link rel="stylesheet" type="text/css" href="{{asset('adminlte/bower_components/select2/dist/css/select2.min.css')}}">
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="{{asset('adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
<!-- Datatables -->
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

        <title> Medicine Transaction Data</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
        <style>
            .bg {
                background-color: white;
                padding: 25px;
                border: 5px solid #337ab7;
                margin: 25px;
            }
        </style>
  </head>
  <body style="background-color:lightgrey;">


    <div class="container-fluid">
        <div class="row">
            <nav class="navbar ">
              <div class="container-fluid" style="background-color:#203e4a; color:white;">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a style="color:white;" class="navbar-brand" href="{{ url('kasir/index') }}"><span class="glyphicon glyphicon-cashier" aria-hidden="true"></span> Cashier</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <!-- <li><a href="#">Link</a></li> -->
                      <li class="nav-item"><a style="color:white;" href="{{ url('kasir/index') }}">Darshboard</a></li>
                    <li class="dropdown">
                      <a style="color:white;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> Check Transaction <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <?php
                          $tersimpan = \DB::table('save_transaksis')->get();
                        ?>
                        @foreach($tersimpan as $ts)
                        <li><a href="{{ url('open-transaksikasir/'.$ts->code) }}">{{ $ts->nama }}</a></li>
                        @endforeach
                      </ul>
                    </li>

                    <li class="nav-item"><a style="color:white;" href="{{ url('kasir/transaksi') }}">New Transaction <span class="glyphicon glyphicon-saved" aria-hidden="true"></span></a></li>
                    <li><a   class="nav-link active"  href="{{ url('kasir/datatransaksi') }}">Medicine Transaction Data</a></li>


                  </ul>

                  <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                      <a style="color:white;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hi! {{ Auth::user()->name }} <span class="caret"></span></a>
                      <ul class="dropdown-menu">

                        <a class="btn btn-outline-info btn-sm" style="color:lightblue; "  href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST">
                              @csrf
                          </form>
                      </ul>
                    </li>
                    <li><a style="font-size:14px; color:white;" class="btn btn-outline-info btn-sm" style="color:lightblue; "  href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          Logout
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST">
                          @csrf
                      </form></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
        </div>


        <div class="row">
      	<div class="col-md-12">
      		<div class="box">
      			<div class="box-header">
      				<h3></h3>
      			</div>
      			<div class="box-body">

<h1 style="text-align:center;">Medicine Transaction Data</h1><hr>
      				<table class="table table-stripped table-bordered table-barang">
      					<thead>
      						<tr>
      							<th>Medicine Sale</th>
      							<th>Qty</th>
      							<th>Total</th>
      							<th>Date Time  </th>
      						</tr>
      					</thead>
                <tbody>
                  @foreach($data as $data)

                  <tr>
                    <td>{{$data->nm_obat}}</td>
                    <td>{{$data->qty}}</td>
                    <td>{{$data->total}}</td>
                    <td>{{$data->tanggal}}</td>
                  </tr>
                  @endforeach
                </tbody>
      				</table>



      			</div>
      		</div>
      	</div>
      </div>
      <script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>
      <script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

      <script type="text/javascript">
      	$(document).ready(function(){
      		var flash = "{{ Session::has('pesan') }}";
      		if(flash){
      			var pesan = "{{ Session::get('pesan') }}";
      			swal('Success',pesan,'success');
      		}

      		$('.tanggal').datepicker({
      	      autoclose: true,
      	      format: 'yyyy-mm-dd'
      	    })

      		$('.table-barang').DataTable({
      	        processing: true,
      	        serverSide: true,
      	        ajax: "{{ url('admin/transaksi/yajra') }}",
      	        columns: [
      	            {data: 'barang_id', name: 'barang_id'},
      	            {data: 'qty', name: 'qty'},
      	            {data: 'total', name: 'total'},
      	            {data: 'tanggal', name: 'tanggal'},
      	        ],
                order: [ [0, 'asc'] ]
      	    });

      	    // Ketika btn tambah di klik
      	    $('.btn-tambah').click(function(e){
      	    	e.preventDefault();
      	    	$('#modal-tambah').modal();
      	    });

      	    // Button edit di klik
      	    $('body').on('click','.btn-edit',function(e){
      	    	var id = $(this).attr('barang-id');
      	    	$.ajax({
      	    		'type':'get',
      	    		'url':"{{ url('admin/barang/get') }}"+'/'+id,
      	    		success: function(data){
      	    			console.log(data);
      	    			$('#modal-edit').find("input[name='nama']").val(data.nama);
      	    			$('#modal-edit').find("input[name='harga_awal']").val(data.harga_awal);
      	    			$('#modal-edit').find("input[name='discount']").val(data.discount);

      	    			var url = "{{ url('admin/barang') }}"+'/'+id;

      	    			$('#modal-edit').find('form').attr('action',url);
      	    		}
      	    	})

      	    	$('#modal-edit').modal();
      	    })
      	})
      </script>

  </body>
</html>
