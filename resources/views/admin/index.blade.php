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
        <a class='animated-arrow' data-toggle="modal" href="#myModaluser">
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
      <a class='animated-arrow' data-toggle="modal" href="#myModal">
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
        <a class='animated-arrow' href='{{url('admin/jadwal')}}'>
          <span class='the-arrow -left'>
            <span class='shaft'></span>
          </span>
          <span class='main'>
            <span class='text' style="font-size:12px;">
          Schedule Data
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
    <li class="nav-item"  style="font-size:12px;">
      <a style="color:white;" class="nav-link" href="#">Medical Record Report</a>
    </li>
    <li class="nav-item"  style="font-size:12px; ">
      <a style="color:white;" class="nav-link" href="#">Drug Report</a>
    </li>
    <li class="nav-item" style="font-size:12px;">
        <a  style="color:white;" class="nav-link"  href="#">Payment Report</a>
    </li>
  </ul>
    @endsection

<!--adddoctor-->
    <!---modaladdemployee--->
    @section('isi')
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <h1 style="text-align:center;">Add Doctors</h1>
            <div class="modal-body">
              <form method="post" action="/dokter/create" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="nip" class="col-form-label" style="color:black;">{{ __('NIP') }}</label>
                    <input id="nip" name="nip" type="text" class="form-control" required autofocus>
                  </div>
                  <div class="form-group">
                    <label for="name" class="col-form-label" style="color:black;">{{ __('Name') }}</label>
                    <input id="name" name="name_dokter" type="text" class="form-control" required autofocus>
                  </div>

                  <div class="form-group">
                    <label for="specialist" class="col-form-label" style="color:black;">{{ __('Specialist') }}</label>
                    <input id="specialist" name="specialist" type="text" class="form-control" required autofocus>
                  </div>
                  <div class="form-group">
                    <label for="specialist" class="col-form-label" style="color:black;">{{ __('Username') }}</label>
                    <input id="specialist" name="username" type="text" class="form-control" required autofocus>
                  </div>
                  <div class="form-group">
                    <label for="specialist" class="col-form-label" style="color:black;">{{ __('Password') }}</label>
                    <input id="specialist" name="password" type="password" class="form-control" required autofocus>
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

                  <div class="form-group">
                    <label for="level " class=" col-form-label text-md-right">{{ __('Status') }}</label>


                      <select id="level"  class="form-control{{ $errors->has('level') ? ' is-invalid' : '' }}" name="status_dokter" value="{{ old('level') }}" required>
                        <option value="ada">Avaible</option>
                        <option value="tidak ada ">Not Avaible</option>


                      </select>

                        @if ($errors->has('level'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('level') }}</strong>
                            </span>
                        @endif
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
<!--end---->

<!--adduser-->
<div class="modal fade" id="myModaluser" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <h1 style="text-align:center;">Add Employee</h1>
        <div class="modal-body">
          <form method="POST" action="/admin/adduser" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="nip" class="col-form-label" style="color:black;">{{ __('Name') }}</label>
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                      @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
              </div>
              <div class="form-group">
                <label for="name" class="col-form-label" style="color:black;">{{ __('Email') }}</label>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group">
                <label for="specialist" class="col-form-label" style="color:black;">{{ __('Username') }}</label>
                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required>

                @if ($errors->has('username'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group">
                <label for="address" class="col-form-label" style="color:black;">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group">
                <label for="hp" class="col-form-label" style="color:black;">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
              </div>
              <div class="form-group">
                <label for="level " class=" col-form-label text-md-right">{{ __('Level') }}</label>


                  <select id="level"  class="form-control{{ $errors->has('level') ? ' is-invalid' : '' }}" name="level" value="{{ old('level') }}" required>
                    <option value="admin">Admin</option>
                    <option value="frontoffice">Front Office</option>
                    <option value="apoteker">Apoteker</option>
                    <option value="kasir">Kasir</option>

                  </select>

                    @if ($errors->has('level'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('level') }}</strong>
                        </span>
                    @endif
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
@endsection
<!---->
  </body>
</html>
@endsection
