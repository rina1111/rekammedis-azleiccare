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
      @endif

            <div class="wrapper">
                <div class="container" style="background-color:white;border-style:solid; border-color:lightblue;height:100%;">
                    <article class="part card-details" >
                        <h1>
                            Edit Visit
                        </h1>
                        <form method="POST" action="/visit/{{$visit->id}}/update" enctype="multipart/form-data" >
                          <hr>
                          @csrf
                            <div class="group card-name">
                                <label for="jam" style="color:black;">{{'Patient ID'}}</label><br><hr style="background-color:white;">
                              <input class="form-control" type="text" name="id_pasien" value="{{$visit->id_pasien}}"  readonly="{{$visit->id_pasien}}">
                            </div>
                            <div class="group card-name">
                                <label for="jam" style="color:black;">{{'Choose Doctor'}}</label><br><hr style="background-color:white;">
                                <select class="form-control" name="id_dokter" >
                                  <option value="">choose</option>
                                    @foreach($dokter   as $dokter)
                                      <option value="{{$dokter->id}}">{{$dokter->name_dokter}}</option>
                                      @endforeach
                                </select>
                            </div>
                            <div class="group card-name">

                                <label for="jam" style="color:black;">{{'Rx Status'}}</label><br><hr style="background-color:white;">
                            <select class="form-control" name="status_obat">
                              <option value="0">Not Avaible</option>

                            </select>
                          </div>
                          <hr>

                              <label for="jam" style="color:black; font-size:16px;" >{{'Medical Status'}}</label><hr style="background-color:white;">

                              <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch1" name="status"  value="checked">
                                <label class="custom-control-label" for="customSwitch1">Have been Checked</label>
                              </div>
                              <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input"  name="status" value="not checked "  id="customSwitch2">
                                <label class="custom-control-label" for="customSwitch2">Not Checked Yet</label>




                              <hr>

                            <button type="submit" class="btn btn-warning">
                                {{ __('Update Visit') }}
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
