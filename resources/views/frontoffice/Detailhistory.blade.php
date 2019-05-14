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
      <a href='{{url('frontoffice/pasiendata')}}' class="btn btn-secondary"> <i class="		fas fa-arrow-left" style="font-size:24px;"></i> </a>

                  <div class="wrapper">
                      <div class="container" style="background-color:white;border-style:solid; border-color:lightblue;height:100%;">

                          <article class="part card-details" >

                              <h1>
                                Detail History
                              </h1>

                                @foreach($visit as $visit)
                                <li>
                                  <strong>Patient ID : <span>{{$visit->id_pasien}}</span> </strong>
                                </li>
                                <li>
                                  <strong>Name : <span>{{$visit->name}}</span> </strong>
                                </li>
                                <li>
                                  <strong>Age : <span>{{$visit->age}}</span> </strong>
                                </li>
                                <li>
                                  <strong>Gender : <span>{{$visit->gender}}</span> </strong>
                                </li>
                                <li>
                                  <strong>Address : <span>{{$visit->address}}</span> </strong>
                                </li>
                                <li>
                                  <strong>Phone : <span>{{$visit->hp}}</span> </strong>
                                </li>
                                <li>
                                  <strong>No BPJS : <span>{{$visit->bpjs}}</span> </strong>
                                </li>
                                <li>
                                  <strong>Doctor : <span>{{$visit->name_dokter}}</span> </strong>
                                </li>
                                <li>
                                  <strong>Specialist : <span>{{$visit->specialist}}</span> </strong>
                                </li>
                                  @endforeach
                                  <hr>
                                  @foreach($riwayat as $riwayat)
                                  <table class="table ">
                                  <thead>

                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td  style="width:100%;">Complaints</td>
                                      <td style="width:5px;">:</td>
                                      <td style="width:200%;">{{$riwayat->keluhan}}</td>
                                    </tr>
                                    <tr>
                                      <td>Diagnosis</td>
                                      <td style="width:5px;">:</td>
                                      <td>{{$riwayat->diagnosa}}</td>
                                    </tr>
                                    <tr>
                                      <td>Doctor's Advice</td>
                                      <td style="width:5px;">:</td>
                                      <td>{{$riwayat->saran}}</td>
                                    </tr>
                                    <tr>
                                      <td>Fee</td>
                                      <td style="width:5px;">:</td>
                                      <td>{{$riwayat->fee}}</td>
                                    </tr>
                                    <tr>
                                      <td>Date of Medical Record</td>
                                      <td style="width:5px;">:</td>
                                      <td>{{$riwayat->created_at}}</td>
                                    </tr>

                                  </tbody>
                                </table>
                              @endforeach
                                <hr>
                          </article>
                          <div class="part bg" style="background-image:url({{asset('image/azleic.png')}})">
                          </div>
                      </div>
                  </div>
                </div>
                </div>
              </div>


  </body>
<script type="text/javascript">
  $('.dropdown-toggle').dropdown()
</script>
</html>
@endsection
