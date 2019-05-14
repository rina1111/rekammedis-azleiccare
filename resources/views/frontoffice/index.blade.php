@extends ('layouts.app')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

  <body >
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    @section('navbar')
    <ul class="nav nav-tabs">
      <li class="nav-item" style="font-size:12px;">
        <a  class="nav-link active" href="">Darshboard</a>
      </li>
    <li class="nav-item" style="font-size:12px;">
      <a  style="color:white;" class="nav-link " href='{{url('frontoffice/pendaftaranpasien')}}'>Patient Registation</a>
    </li>
    <li class="nav-item"  style="font-size:12px;">
      <a style="color:white;" class="nav-link" href='{{url('frontoffice/pasiendata')}}'>Patient Data</a>
    </li>
    <li class="nav-item"  style="font-size:12px;">
      <a style="color:white;" class="nav-link" href='{{url('frontoffice/doctorschedule')}}'>Doctor Schedule</a>
    </li>
    <li class="nav-item"  style="font-size:12px;">
      <a style="color:white;" class="nav-link" href='{{url('frontoffice/doctor')}}'>Doctor Data</a>
    </li>

  </ul>
    @endsection

    @section('isi')
    <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4"> Hi </h1><br>
    <span>  <p class="lead">Welcome to the Front Office Page</p></span>

  </div>
</div>

    </div>
  </body>

</html>
@endsection
