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


  </ul>
    @endsection

    @section('navbar')
    <ul class="nav nav-tabs">
      <li class="nav-item" style="font-size:12px;">
        <a  class="nav-link active" href="{{url('admin/index')}}">Darshboard</a>
      </li>
    <li class="nav-item" style="font-size:12px;">
      <a style="color:white;"  class="nav-link " href="{{url('admin/patientreport')}}">Patient Report</a>
    </li>
    <li class="nav-item"  style="font-size:12px; ">
      <a style="color:white;" class="nav-link" href="{{url('admin/drugreport')}}">Drug Report</a>
    </li>
    <li class="nav-item" style="font-size:12px;">
        <a  style="color:white;" class="nav-link"  href="{{url('admin/salesreport')}}">Sales Report</a>
    </li>
  </ul>
    @endsection

<!--adddoctor-->
    <!---modaladdemployee--->
    @section('isi')
    @include('sweet::alert')
    <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4"> Hi Admin</h1>
    <p class="lead">Welcome to the Admin Page</p>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <a  data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1" class="btn btn-secondary"><i class="fas fa-mortar-pestle">Employee Data</i></a>
      </div>
    </div>

    </div>
  </div>
  </div>
</div>
<div class="row">
  <div class="col-12">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
        <table id="table" class="table table-striped table-bordered   table-dark" style="width:100%">
                        <thead>
                          <tr>
                          <th colspan="6" style="text-align:center;"><strong>Employee Data</strong></th>
                        </tr>
                            <tr>

                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($data as $data)
                          <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->username}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->level}}</td>
                            <td><a href="user/delete/{{$data->id}}" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i></a></td>
                          </tr>
                          @endforeach
                        </tbody>

                    </table>
      </div>
    </div>
  </div>

  <div class="col">
  <div class="collapse multi-collapse" id="multiCollapseExample2">
    <div class="card card-body">
      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
    </div>
  </div>
</div>
</div>
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">

      </div>
    </div>
  </div>

<div class="card-header" id="headingThree">
  <h2 class="mb-0">

    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
      Add Employee Data
    </button>
  </h2>
</div>
<div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
  <div class="card-body">
    <form method="POST" action="admin/usercrete">
        @csrf

        <div class="form-group row">
            <label for="name" class=" col-form-label text-md-right">{{ __('Name') }}</label>


                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
        </div>

        <div class="form-group row">
            <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>


        <div class="form-group row">
            <label for="username" class=" col-form-label text-md-right">{{ __('Username') }}</label>
              <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required>

                @if ($errors->has('username'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
            </div>

        <div class="form-group row">
            <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

        <div class="form-group row">
            <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>


                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>

        <div class="form-group row">
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


        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>
</div>
</div>

</div>
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


@endsection
<!---->
  </body>
</html>
@endsection
