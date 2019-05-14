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
          <a  style="color:white;"  class="nav-link " href="{{url('/home')}}">Darshboard</a>
        </li>
      <li class="nav-item" style="font-size:12px;">
        <a style="color:white;"  class="nav-link " href="{{url('admin/patientreport')}}">Patient Report</a>
      </li>

      <li class="nav-item"  style="font-size:12px; ">
        <a style="color:white;"  class="nav-link " href="{{url('admin/drugreport')}}">Drug Report</a>
      </li>
      <li class="nav-item" style="font-size:12px;">
          <a  class="nav-link active"  href="{{url('admin/salesreport')}}">Sales Report</a>
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
    <table class="table table-bordered" style="font-size:10px;">
        <thead style="text-align:center;" >
          <tr class="bg-info">
            <th>Sale ID</th>
            <th>Medicine Sale</th>
            <th>Qty</th>
            <th >Total</th>
            <th>DateTime</th>

          </tr>
        </thead>
        <tbody>
           @foreach($data as $data)
          <tr>
              <td>{{ $data->sale_id}}</td>
            <td>{{ $data->nm_obat}}</td>
            <td>{{ $data->qty}}</td>
            <td>{{ $data->total}}</td>
            <td>{{ $data->tanggal}}</td>

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

  @endsection
    </body>
    <script type="text/javascript">
      $('.dropdown-toggle').dropdown()
    </script>
  </html>
  @endsection
