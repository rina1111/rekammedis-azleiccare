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

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{('azleic-care')}}</title>
    <!-- Scripts -->

  <script src="{{ asset('js/app.js') }}" defer></script>
      <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body >
    <div id="app">


    </div>
    <div class="d-flex" id="wrapper">
           <!-- Sidebar -->
     <div class=" border-right" id="sidebar-wrapper" style="max-width:13rem; background-color:#203e4a;">
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


       <a class="btn btn-outline-info btn-sm" > Hi! {{ Session::get('name_dokter') }} </a>
       <a class="btn btn-outline-info btn-sm" style="color:lightblue; "  href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
         </a>

         <form id="logout-form" action="{{ url('dokter/logout') }}" method="get">
             @csrf
         </form>
         <div class="card-header">
         </div>
         <div class="card-body">

         </div>
         </div>
         </div>
         <div id="page-content-wrapper">
        <nav class="navbar" style="background-color:#203e4a; color:white;">
        @yield('navbar')
        </nav>

        <div id="content-wrapper">
        <div class="container">

        @yield('isi')
        </div>
        </div>
        </div>





  </body>
</html>
