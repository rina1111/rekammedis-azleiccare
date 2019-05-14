<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Transaction</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

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
            <nav class="navbar navbar-default">
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
                      <li><a class="nav-link active" href="{{ url('kasir/index') }}">Darshboard</a></li>
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

                    <li><a style="color:white;" href="{{ url('kasir/transaksi') }}">New Transaction <span class="glyphicon glyphicon-saved" aria-hidden="true"></span></a></li>
                    <li><a   style="color:white;"  href="{{ url('kasir/datatransaksi') }}">Medicine Transaction Data</a></li>


                  </ul>

                  <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                      <a style="color:white;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hi! {{ Auth::user()->name }} <span class="caret"></span></a>
                      <ul class="dropdown-menu">

                      
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


    <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4"> <i style="font-size: 72px;" class="	fas fa-dollar-sign"></i> </h1><br>
    <span>  <p class="lead">Welcome to the Cashier Page</p></span>

  </div>
</div>

  </body>
</html>
