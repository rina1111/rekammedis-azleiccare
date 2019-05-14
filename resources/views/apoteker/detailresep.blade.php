<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    <!-- CSRF Token -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
    <link rel="stylesheet" href="{{asset('css/simple-sidebar.css')}}">
    <link rel="stylesheet" href="{{asset('css/arrows.css')}}">
    <link rel="stylesheet" href="{{asset('css/sb-admin.css')}}">
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
    <link rel="stylesheet" href="{{asset('css/card.css ')}}">
    <link rel="stylesheet" href="{{asset('css/sb-admin.min.css')}}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <!-- Styles -->


    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Detail of Doctor's Prescription</title>
    <!-- Scripts -->
<script src="{{asset('assets/vendor/sweetalert2/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/datatables.min.js')}}"></script>
    <script src="{{ asset('js/form.js') }}" defer></script>

    <script type="text/javascript">
      $('.dropdown-toggle').dropdown()
    </script>
      <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body >
    <div id="app">

                        <!-- Authentication Links -->
                        @guest

                            @if (Route::has('register'))

                            @endif
                        @else
    </div>
    <div class="d-flex" id="wrapper">
           <!-- Sidebar -->
     <div class=" border-right" id="sidebar-wrapper" style="max-width: 13 rem; background-color:#203e4a;">
        <div class="card text-white mb-3" style="max-width: 13rem; background-color:#203e4a; border-radius:15px;border-style:solid;"><hr>
         <img src="{{asset('image/azleic.png')}}" alt=""style="max-width: 12rem;">
          <a id="clock" class="btn btn-outline-info btn-sm"></a>
           <script type="text/javascript">
           <!--
           function showTime() {
               var a_p = "";
               var today = new Date();
               var curr_hour = today.getHours();
               var curr_minute = today.getMinutes();
               var curr_second = today.getSeconds();
               if (curr_hour < 12) {
                   a_p = "AM";
               } else {
                   a_p = "PM";
               }
               if (curr_hour == 0) {
                   curr_hour = 12;
               }
               if (curr_hour > 12) {
                   curr_hour = curr_hour - 12;
               }
               curr_hour = checkTime(curr_hour);
               curr_minute = checkTime(curr_minute);
               curr_second = checkTime(curr_second);
            document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
               }

           function checkTime(i) {
               if (i < 10) {
                   i = "0" + i;
               }
               return i;
           }
           setInterval(showTime, 500);
           //-->
           </script>

       <a class="btn btn-outline-info btn-sm" > Hi! {{ Auth::user()->name }} </a>
       <a class="btn btn-outline-info btn-sm" style="color:lightblue; "  href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST">
             @csrf
         </form>
         <div class="card-header">

         </div>

         <div class="card-body">
           @yield('content2')
         </div>
         </div>
         </div>
         @endguest


   <div id="page-content-wrapper">
 <nav class="navbar justify-content-center" style="background-color:#203e4a; color:white;">
   <ul class="nav nav-tabs">
     <li class="nav-item" style="font-size:12px;">
       <a style="color:white;"  class="nav-link " href="">Darshboard</a>
     </li>
   <li class="nav-item" style="font-size:12px;">
     <a  style="color:white;" class="nav-link " href=''>Medicine Data</a>
   </li>

   <li class="nav-item" style="font-size:12px;">
     <a   class="nav-link active " href=''>Doctor's Prescription </a>
   </li>

   <li><a  style="color:white;"  class="nav-link " href="{{ url('apoteker/transaction') }}">New Medicine Transaction <span class="glyphicon glyphicon-saved" aria-hidden="true"></span></a></li>
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

</nav>





  <div class="card-body">
      @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
      @endif




                      <div class="container-fluid" style="background-color:#203e4a; border-radius:10px;border-style:solid; border-color:lightblue;height:100%; width:100%;">
                        <div class="row">
                          <div class="col-12">

                          <article class="part card-details">
                            <div class="card">
                              <h1 style="color:#203e4a; text-align:center; font-family:Times new rowman;">Detail of Doctor's Prescription</h1> <hr>
                              <table class="table " style="font-size:14px;">
                                        <thead>

                                        </thead>
                                        <tbody>
                                            @foreach($visit as $visitor)
                                          <tr>
                                            <th style="width:30px;" scope="row">Visitor ID</th>
                                            <td>:</td>
                                            <td>{{$visitor->id_visitor}}</td>

                                          </tr>
                                          <tr>
                                            <th scope="row">Name</th>
                                            <td>:</td>
                                            <td>{{$visitor->name}}</td>

                                          </tr>
                                          <tr>
                                            <th scope="row">Age</th>
                                              <td>:</td>
                                            <td>{{$visitor->age}} Years</td>

                                          </tr>
                                          <tr>
                                            <th scope="row">Gender</th>
                                                <td>:</td>
                                        <td>{{$visitor->gender}}</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">Doctor</th>
                                              <td>:</td>
                                            <td>{{$visitor->name_dokter}}</td>

                                          </tr>
                                          <tr>
                                            <th  scope="row">Diagnosis</th>
                                              <td>:</td>
                                            <td >{{$visitor->diagnosa}}</td>

                                          </tr>
                                          <tr>
                                            <th scope="row">Fee</th>
                                              <td>:</td>
                                            <td>{{$visitor->fee}}</td>

                                          </tr>
                                          <tr>
                                            <th>  <a href="{{ url('apoteker/transaction') }}" role="button" aria-expanded="false" aria-controls="collapseExample"  class="btn btn-success btn-sm">Process</a>
                                              <a href="{{url('apoteker/resepobat')}}" class="btn btn-dark">Back</a>

                                            </th>

                                          </tr>

                                          @endforeach

                                        </tbody>
                                      </table>


                            </div>
                            <hr>
                          <table class="table table-striped" style="color:white; font-size:12px;">
                        <thead>
                          <tr>
                            <th>Medicine</th>
                            <th>Dose</th>
                            <th>How to Consume</th>
                            <th>Quantity</th>
                            <th>Stock</th>
                          </tr>
                        </thead>
                        <tbody>


                          @foreach($obat as $index => $obat)


                          <tr>
                            <td class="btn-barang">{{$obat->nm_obat}}</td>
                            <td>{{$obat->dosis}}</td>
                            <td>{{$obat->konsumsi}}</td>
                                <td>{{$obat->jumlah}}</td>
                                <td>@if($obat->status==0)<button type="button" data-status="{{$obat->status}}"  class="btn btn-success btn-sm"><i class="fas fa-check"></i> Ready Stock </button>
                                     @else ($obat->status==1)<button type="button" data-status="{{$obat->status}}" class="btn btn-danger btn-sm"><i class="fas fa-times"></i> Out of Stock </button>@endif</td>

                          </tr>

                          @endforeach


                        </tbody>
                          </table>

                            </article>

                                <hr>
                                <div class="wrapper" style="border-radius:25px;">
                              <div class="collapse" id="collapseExample" style="background-color:white;" >

                      </div>
                  </div>




</body>
</html>
