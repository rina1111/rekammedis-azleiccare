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
        <a style="color:white;"  class="nav-link" href="{{url('/home')}}">Darshboard</a>
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

  @foreach($jadwal_dokter as $detail)
  <div class="wrapper">
      <div class="container" style="height:100%">
          <article class="part card-details">

              <h1>
                  Detail Doctor
              </h1>
              <form method="POST" enctype="multipart/form-data" >
                <hr>
                @csrf
                  <div class="group card-name">
                  <p style="color:white"><i class="	fas fa-id-card-alt">&nbsp;&nbsp;NIP : &nbsp;{{$detail->nip}}</i></p>
                  <p style="color:white"><i class="	fas fa-user-md">&nbsp;&nbsp;Name : &nbsp;{{$detail->name_dokter}}</i></p>
                  <p style="color:white"><i class="	fas fa-stethoscope">&nbsp;&nbsp;Specialist : &nbsp;{{$detail->specialist}}</i></p>
                  <p style="color:white"><i class="fas fa-address-card">&nbsp;&nbsp;Address : &nbsp;{{$detail->address}}</i></p>
                  <p style="color:white"><i class="	fas fa-phone">&nbsp;&nbsp;Phone : &nbsp;{{$detail->hp}}</i></p>

                  </div>
                    <div class="group card-name">
                      <table class="table table-bordered" style="font-size:10px; text-align:center; color: white;">
                          <thead >
                            <tr class="bg-info">
                              <th >Monday</th>
                              <th>Tuesday</th>
                              <th>Wednesday</th>
                              <th>Thursday</th>
                              <th>Friday</th>
                              <th>Saturday</th>
                            </tr>
                          </thead>
                          <tbody>
                              <tr>

                                <td>{{$detail->monday}}</td>
                                <td>{{$detail->tuesday}}</td>
                                <td>{{$detail->wednesday}}</td>
                                <td>{{$detail->thursday}}</td>
                                <td>{{$detail->friday}}</td>
                                <td>{{$detail->saturday}}</td>

                              </tr>


                          </tbody>
                        </table>

                    </div>
              </form>
          </article>
          <div class="part bg" style="background-image:url({{asset('storage/'.$detail->avatar)}})">
          </div>
      </div>
  </div>
</div>
@endforeach
<!------endmodal---->

@endsection
  </body>
</html>
@endsection
