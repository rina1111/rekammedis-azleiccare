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
  @include('sweet::alert')
    @section('navbar')
    <ul class="nav nav-tabs">
      <li class="nav-item" style="font-size:12px;">
        <a  style="color:white;"  class="nav-link " href="">Darshboard</a>
      </li>
    <li class="nav-item" style="font-size:12px;">
      <a  style="color:white;" class="nav-link " href='{{url('frontoffice/pendaftaranpasien')}}'>Patient Registation</a>
    </li>
    <li class="nav-item"  style="font-size:12px;">
      <a  class="nav-link active" href='{{url('frontoffice/pasiendata')}}'>Patient Data</a>
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
      <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{session('sukses')}}</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>
    </div>
      @endif
      <div class="wrapper">
<a class="btn btn-secondary" href="{{url('frontoffice/datavisit')}}">See Visit Data</a>
        <table class="table table-bordered" style="font-size:142x; text-align:center; ">
            <thead >
              <tr class="bg-info">

                <th>No</th>
                <th>Name</th>
                <th>Age</th>
                <th >Gender</th>
                <th>Address</th>
                <th>Phone</th>
                <th>BPJS</th>
                <th>History</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($pasien  as $index => $pasien)
                  <th>{{$index+1}}</th>
                  <th>{{$pasien->name}}</th>
                  <th>{{$pasien->age}}</th>
                  <td>{{$pasien->gender}}</td>
                  <td>{{$pasien->address}}</td>
                  <td>{{$pasien->hp}}</td>
                  <td>{{$pasien->bpjs}}</td>
                  <td> <a href="/pasien/{{$pasien->id}}/history" class="btn btn-secondary btn-sm"> <i class="fas fa-file-archive" ></i> </a> </td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="	fas fa-cogs"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href='/pasien/{{$pasien->id}}/read'>Additional Visit</a>
                        <a class="dropdown-item" href="/pasien/{{$pasien->id}}/edit">Edit</a>
                        <a class="dropdown-item" href="/pasien/{{$pasien->id}}/delete">Delete</a>
                    </div>
                  </td>
                </tr>
            </tbody>
            @endforeach
          </table>
          <script type="text/javascript">
            $('.dropdown-toggle').dropdown()
          </script>
@endsection
  </body>

</html>
