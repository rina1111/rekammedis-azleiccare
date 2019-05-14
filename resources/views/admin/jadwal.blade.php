@extends ('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

  <body >
    <div id="admin" class="">


    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    @section('content2')

  <ul>


    <li>
      <a class='animated-arrow' href="{{ route('register') }}">
        <span class='the-arrow -left'>
          <span class='shaft'></span>
        </span>
        <span class='main'>
          <span class='text' style="font-size:12px;">
            Add Employee
          </span>
        </span>
      </a>
    </li>
    <li>
      <a class='animated-arrow' data-toggle="modal" href='#myModal'>
        <span class='the-arrow -left'>
          <span class='shaft'></span>
        </span>
        <span class='main'>
          <span class='text' style="font-size:12px;">
          Add Doctors
          </span>
        </span>
      </a>
    </li>
    <li>
      <a class='animated-arrow' href='{{url('admin/doctors_data')}}'>
        <span class='the-arrow -left'>
          <span class='shaft'></span>
        </span>
        <span class='main'>
          <span class='text' style="font-size:12px;">
      Doctors Data
          </span>
          </span>
        </span>
      </a>
    </li>

      <li>
        <a class='animated-arrow' href='{{url('admin/schedule_data')}}'>
          <span class='the-arrow -left'>
            <span class='shaft'></span>
          </span>
          <span class='main'>
            <span class='text' style="font-size:12px;">
        <strong> Schedule Data</strong>
            </span>
            </span>
          </span>
        </a>
      </li>

      <li>
        <a class="animated-arrow" data-toggle="modal" href="#myModal1">
        <span class='the-arrow -left'>
          <span class='shaft'></span>
        </span>
        <span class='main'>
          <span class='text' style="font-size:12px;">
          Employee Data
          </span>
        </span>
      </a>
    </li>
  </ul>
    @endsection

    @section('navbar')
    <ul class="nav nav-tabs">
      <li class="nav-item" style="font-size:12px;">
        <a  class="nav-link active" href="#">Darshboard</a>
      </li>
    <li class="nav-item" style="font-size:12px;">
      <a style="color:white;"  class="nav-link " href="#">Patient Report</a>
    </li>

    <li class="nav-item"  style="font-size:12px; ">
      <a style="color:white;" class="nav-link" href="#">Drug Report</a>
    </li>
    <li class="nav-item" style="font-size:12px;">
        <a  style="color:white;" class="nav-link"  href="#">Sales Report</a>
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


  <table class="table table-bordered" style="font-size:10px; text-align:center; ">
      <thead >
        <tr class="bg-info">

          <th>No</th>
          <th>Doctor ID</th>
          <th >Monday</th>
          <th>Tuesday</th>
          <th>Wednesday</th>
          <th>Thursday</th>
          <th>Friday</th>
          <th>Saturday</th>
          <th>Action</th>

        </tr>
      </thead>
      <tbody>


          @foreach($schedule  as $index => $jadwal_dokter)
          <tr>
            <th>{{$index+1}}</th>
            <th>{{$jadwal_dokter->id_dokter}}</th>
            <td>{{$jadwal_dokter->monday}}</td>
            <td>{{$jadwal_dokter->tuesday}}</td>
            <td>{{$jadwal_dokter->wednesday}}</td>
            <td>{{$jadwal_dokter->thursday}}</td>
            <td>{{$jadwal_dokter->friday}}</td>
            <td>{{$jadwal_dokter->saturday}}</td>
            <td>
              <a class="btn btn-primary btn-sm" href="/dokter/{{$jadwal_dokter->id}}/editjadwal"style="font-size:8px;"><i class="far fa-edit" style="font-size:10px;"></i></a>
              <a class="btn btn-danger btn-sm" href="/dokter/{{$jadwal_dokter->id}}/deletejadwal"style="font-size:8px;"> <i class="fas fa-window-close" style="font-size:10px;"></i> </a>
              <a class="btn btn-secondary btn-sm" href="/dokter/{{$jadwal_dokter->id}}/detailjadwal"style="font-size:8px;"> <i class="fas fa-info" style="font-size:10px;"></i> </a>
            </td>
          </tr>

                @endforeach
      </tbody>
    </table>

</div>

<!---modaladdemployee--->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form method="POST" action="/dokter/create" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="nip" class="col-form-label" style="color:black;">{{ __('NIP') }}</label>
                <input id="nip" name="nip" type="text" class="form-control" required autofocus>
              </div>
              <div class="form-group">
                <label for="name" class="col-form-label" style="color:black;">{{ __('Name') }}</label>
                <input id="name" name="name" type="text" class="form-control" required autofocus>
              </div>
              <div class="form-group">
                <label for="specialist" class="col-form-label" style="color:black;">{{ __('Specialist') }}</label>
                <input id="specialist" name="specialist" type="text" class="form-control" required autofocus>
              </div>
              <div class="form-group">
                <label for="address" class="col-form-label" style="color:black;">{{ __('Address') }}</label>
                <input id="address" name="address" type="text" class="form-control" required autofocus>
              </div>
              <div class="form-group">
                <label for="hp" class="col-form-label" style="color:black;">{{ __('Phone') }}</label>
                <input id="hp" name="hp" type="text" class="form-control" required autofocus>
              </div>
              <div class="form-group">
                <label for="avatar" class="col-form-label" style="color:black;">{{ __('Avatar') }}</label>
                <input id="avatar" name="avatar" type="file" class="form-control" required autofocus>
              </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">
              {{ __('Save') }}
          </button>


      </form>

        </div>


    </div>
  </div>
</div>
</div>
<!------endmodal---->

@endsection
  </body>
</html>
@endsection
