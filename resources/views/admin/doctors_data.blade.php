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
        <strong>Doctors Data</strong>
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
<br>
<br>
    <form class="form-inline my-2 my-lg-0" action="/dokter/caridokter" method="GET">
         <input class="form-control" name="caridokter" type="search" placeholder="Search" aria-label="Search" style="height:30px;">
         <button class="btn btn-outline-secondary my-2 my-sm-0 btn-sm" type="submit">Search</button>
         <a class="btn btn-outline-secondary my-2 my-sm-0 btn-sm" href="{{url('admin/doctors_data')}}"> BACK &nbsp;<i class="	fas fa-undo"></i> </a>
       </form><br>
    <table class="table table-bordered" style="font-size:10px;">
        <thead style="text-align:center;" >
          <tr class="bg-info">
            <th>No</th>
            <th >NIP</th>
            <th>Name</th>
            <th >Specialist</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Photo</th>
            <th>Status</th>
            <th>action</th>
          </tr>
        </thead>
        <tbody>
           @foreach($dokter as $index => $data)
          <tr>
            <td>{{$index+1}}</td>
            <td>{{ $data->nip}}</td>
            <td>{{ $data->name_dokter}}</td>
            <td>{{ $data->specialist}}</td>
            <td>{{ $data->address}}</td>
            <td>{{ $data->hp}}</td>
              <td>@if($data->avatar)
                  <img src="{{asset('storage/'.$data->avatar)}}" width="70px"/>
                  @else
                  N/A
                  @endif
            </td>
          <td>@if($data->status_dokter=='ada')<a href=''  class="btn btn-success btn-sm"> <i class="fas fa-check"></i>Avaible</a>
               @else ($data->status_dokter=='tidak ada')<a href=''  class="btn btn-danger btn-sm"> <i class="fas fa-times"></i>Not Avaible</a> @endif</td>
          <td>
            <div class="btn-group">
              <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="	fas fa-cogs"></i>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item"  href="/dokter/{{$data->id}}/view">Add Schedule</a>
                <a class="dropdown-item" href="/dokter/{{$data->id}}/edit">Edit</a>
                <a class="dropdown-item" href="/dokter/{{$data->id}}/delete">Delete</a>
                <a class="dropdown-item"  href="/dokter/{{$data->id}}/detailjadwal2">Info</a>
            </div>
          </td>
          </tr>
        </tbody>
        @endforeach
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
  <!------endmodal---->
  <script type="text/javascript">
    $('.dropdown-toggle').dropdown()
  </script>
  @endsection
    </body>

  </html>
  @endsection
