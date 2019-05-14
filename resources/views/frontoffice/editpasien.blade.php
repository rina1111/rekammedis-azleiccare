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
    <li class="nav-item"  style="font-size:12px;">
      <a  class="nav-link active" href='{{url('frontoffice/pasiendata')}}'>Patient Data</a>
    </li>
    <li class="nav-item"  style="font-size:12px;"1>
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
      @endif

      <div class="wrapper">
          <div class="container" style="height:100%">
              <article class="part card-details">
                  <h1>
                      Edit Patient Registation
                  </h1>
                  <form method="POST" action="/pasien/{{$pasien->id}}/update" enctype="multipart/form-data" >
                    <hr>
                    @csrf
                      <div class="group card-name">
                          <label for="jam" style="color:white;">{{'Name'}}</label><br><hr style="background-color:white;">
                            <input class="form-control" type="text" name="name" style="height:20px;" value="{{$pasien->name}}" >
                      </div>
                      <div class="group card-name">
                          <label for="jam" style="color:white;">{{'Gender'}}</label><br><hr style="background-color:white;">
                          <select class="form-control" name="gender" placeholder="{{$pasien->gender}}">
                            <option value="">Choose</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>

                          </select>

                      </div>
                      <div class="group card-name">
                          <label for="jam" style="color:white;">{{'Age'}}</label><br><hr style="background-color:white;">
                            <input class="form-control" type="text" name="age" style="height:20px;" value="{{$pasien->age}}">
                      </div>
                      <div class="group card-name">
                          <label for="jam" style="color:white;">{{'Address'}}</label><br><hr style="background-color:white;">
                            <input class="form-control" type="text" name="address" style="height:20px;" value="{{$pasien->address}}">
                      </div>
                      <div class="group card-name">
                          <label for="jam" style="color:white;">{{'Phone'}}</label><br><hr style="background-color:white;">
                            <input class="form-control" type="text" name="hp" style="height:20px;" value="{{$pasien->hp}}">
                      </div>
                      <div class="group card-name">
                          <label for="jam" style="color:white;">{{'No BPJS'}}</label><br><hr style="background-color:white;">
                            <input class="form-control" type="text" name="bpjs" style="height:20px;"value="{{$pasien->bpjs}}" >
                      </div>
                      <button type="submit" class="btn btn-secondary">
                          {{ __('Update Patient') }}
                      </button>

                  </form>
              </article>
              <div class="part bg" style="background-image:url({{asset('image/azleic.png')}})">
              </div>
          </div>
      </div>
    </div>
    </div>
  </div>
  </body>

</html>
@endsection
