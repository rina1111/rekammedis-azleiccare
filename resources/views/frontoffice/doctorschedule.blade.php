@extends ('layouts.app')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
@section ('content')
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
    <li class="nav-item"  style="font-size:12px;">
      <a style="color:white;" class="nav-link" href='{{url('frontoffice/pasiendata')}}'>Patient Data</a>
    </li>
    <li class="nav-item"  style="font-size:12px;">
      <a  class="nav-link active" href='{{url('frontoffice/doctorschedule')}}'>Doctor Schedule</a>
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
      @endif

      <div class="wrapper">
        <table class="table table-bordered" style="font-size:12px; text-align:center; ">
            <thead >
              <tr class="bg-info">

                <th>No</th>
                <th>Name</th>
                <th>Specialist</th>
                <th >Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
                <th>Saturday</th>

              </tr>
            </thead>
            <tbody>


                @foreach($jadwal_dokter  as $index => $jadwal_dokter)
                <tr>
                  <th>{{$index+1}}</th>
                  <th>{{$jadwal_dokter->name_dokter}}</th>
                  <th>{{$jadwal_dokter->specialist}}</th>
                  <td>{{$jadwal_dokter->monday}}</td>
                  <td>{{$jadwal_dokter->tuesday}}</td>
                  <td>{{$jadwal_dokter->wednesday}}</td>
                  <td>{{$jadwal_dokter->thursday}}</td>
                  <td>{{$jadwal_dokter->friday}}</td>
                  <td>{{$jadwal_dokter->saturday}}</td>
                </tr>

                      @endforeach
            </tbody>
          </table>
@endsection
    </div>
  </body>
</html>
@endsection
