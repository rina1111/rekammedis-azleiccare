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
        <a  style="color:white;"  class="nav-link " href="">Darshboard</a>
      </li>
    <li class="nav-item" style="font-size:12px;">
      <a  style="color:white;" class="nav-link " href='{{url('frontoffice/pendaftaranpasien')}}'>Patient Registation</a>
    </li>
    <li class="nav-item "  style="font-size:12px;">
      <a class="nav-link active" href='{{url('frontoffice/doctorschedule')}}'>Patient Data</a>
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
    <div class="row">
      @if(session('sukses'))
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>{{session('sukses')}}</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>
    </div>
      @endif
  <a href='{{url('frontoffice/pasiendata')}}' class="btn btn-secondary"> <i class="		fas fa-arrow-left" style="font-size:24px;border-radius:25px; "></i> </a>
                  <div class="wrapper" style="background-color:lightblue; border-radius:20px; color:white;">
<br>
<h1 style="text-align:center;">History</h1><hr>
  <div class="card-group">
    @foreach($visit as $visit)
  <div class="card" style="width:30rem;" >
    <p style="text-align:center;"><img src="{{asset('image/azleic.png')}}" class="card-img-top" alt="..." style="width:50%; height:100%;"></p>
    <div class="card-header" style="border-bottom:solid; background-color:lightblue; border-color:grey;">
      <h5 class="card-title" style="text-align:center;">Date of Visit</h5>
        <h5 class="card-title" style="text-align:center;">{{$visit->tgl_kunjungan}}</h5>
    </div>
    <div class="card-body">
    <div class="card-header">
      <li  style="border-bottom:double; color:black;" >Patient Name <span  style="padding-left:13px;" >:</span> <span>{{$visit->name}}</span> </li>
      <li style="border-bottom:double;color:black;" >Age <span  style="padding-left:70px;">:</span> <span>{{$visit->age}}</span> </li>
      <li style="border-bottom:double;color:black;" >Gender <span  style="padding-left:50px;">:</span> <span>{{$visit->gender}}</span> </li>
      <li style="border-bottom:double;color:black;" >Address <span  style="padding-left:45px;">:</span> <span>{{$visit->address}}</span> </li>
      <li style="border-bottom:double;color:black;" >Phone <span  style="padding-left:57px;">:</span> <span>{{$visit->hp}}</span> </li>
      <li style="border-bottom:double;color:black;" >BPJS <span  style="padding-left:65px;">:</span> <span>{{$visit->bpjs}}</span> </li>
      <li style="border-bottom:double; color:black; ">Doctor <span  style="padding-left: 55px;">:</span> <span>{{$visit->name_dokter}} </span></li>
      <li style="border-bottom:double; color:black;">Specialist <span  style="padding-left: 40px;">:</span> <span>{{$visit->specialist}} </span></li>
    </div>

      <table class="table ">
      <thead>
      </thead>
      <tbody>
        <tr>
          <td  style="width:25%;padding-bottom:5px;">Complaints</td>
          <td style="width:5px;">:</td>
          <td style="width:200%;">{{$visit->keluhan}}</td>
        </tr>
        <tr>
          <td>Diagnosis</td>
          <td style="width:5px;">:</td>
          <td>{{$visit->diagnosa}}</td>
        </tr>
        <tr>
          <td>Doctor's Advice</td>
          <td style="width:5px;">:</td>
          <td>{{$visit->saran}}</td>
        </tr>
        <tr>
          <td>Fee</td>
          <td style="width:5px;">:</td>
          <td>{{$visit->fee}}</td>
        </tr>


      </tbody>
    </table>
    </div>
    <div class="card-footer">
      <small class="text-muted" style="text-align:center;">=</small>
    </div>
  </div>
  @endforeach

</div>
                  </div>


  </body>
<script type="text/javascript">
  $('.dropdown-toggle').dropdown()
</script>
</html>
@endsection
