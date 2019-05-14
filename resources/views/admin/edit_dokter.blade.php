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
    <strong> Doctors Data</strong>
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
      <a  class="nav-link active" href="#">Patient Report</a>
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

  <div class="wrapper">
      <div class="container" style="height:100%;">
          <article class="part card-details">
              <h1>
                  Edit Doctor Profile
              </h1>
              <form method="POST" action="/dokter/{{$data->id}}/update" enctype="multipart/form-data" >
                <hr>
                @csrf
                  <div class="group card-name">
                      <label for="name" style="color:white;">{{'NIP'}}</label>
                        <input class="form-control" type="text" name="nip" value="{{$data->nip}}">
                  </div>
                  <div class="group card-name">
                      <label for="name" style="color:white;">{{'Doctor Name'}}</label>
                        <input class="form-control" type="text" name="name_dokter" value="{{$data->name_dokter}}">
                  </div>

                  <div class="group card-name">
                      <label for="jam" style="color:white;">{{'Specialist'}}</label>
                        <input class="form-control" type="text" name="specialist" value="{{$data->specialist}}" >
                  </div>
                  <div class="group card-name">
                      <label for="jam" style="color:white;">{{'Username'}}</label>
                        <input class="form-control" type="text" name="username" value="{{$data->username}}" >
                  </div>
                  <div class="group card-name">
                      <label for="jam" style="color:white;">{{'Password'}}</label>
                        <input class="form-control" type="text" name="password" value="{{$data->password}}" >
                  </div>

                  <div class="group card-name">
                      <label for="jam" style="color:white;">{{'Address'}}</label>
                        <input class="form-control" type="text" name="address" value="{{$data->address}}" >
                  </div>
                  <div class="group card-name">
                      <label for="jam" style="color:white;">{{'Phone'}}</label>
                        <input class="form-control" type="text" name="hp" value="{{$data->hp}}" >
                  </div>
                  <div class="group card-name">
                    <label for="jam" style="color:white;">{{'Photo '}}</label>
                 Current avatar: <br>
                 @if($data->avatar)
                 <img src="{{asset('storage/'.$data->avatar)}}" width="120px" />
                 <br>
                 @else
                 No avatar
                 @endif
                 <br>
                 <smal class="text-muted">Kosongkan jika tidak ingin mengubah avatar</small>
                <input id="avatar" name="avatar" type="file" class="form-control"  >
                  </div>

                  <button type="submit" class="btn btn-secondary">
                      {{ __('Update') }}
                  </button>

              </form>
          </article>
          <div class="part bg" style="background-image:url({{asset('storage/'.$data->avatar)}})">
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
