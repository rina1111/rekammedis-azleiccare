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
      <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{session('sukses')}}</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>
    </div>
      @endif


      <div class="wrapper">

                            <div class="wrapper">
                              <div class="card mb-3" style="max-width: 1000px;background-color:#203e4a; border-radius:25px;">
                                <div class="card-header" style="background-color:lightblue; border-radius:25px;">
                                  <h1 style="text-align:center; color:white; font-family:times rowman;">Visit Data</h1>
                                </div>
                                <div class="row no-gutters">
                                  <div class="col-md-4">
                                    <img src="{{asset('image/azleic.png')}}" class="card-img" alt="...">
                                  </div>

                                  <div class="col-md-8">
                                    <div class="card-body">

                                      <table class="table table-bordered" style="font-size:14px;; text-align:center; ">
                                                        <thead >
                                                          <tr class="bg-info">

                                                            <th style=" color:white; ">No</th>
                                                            <th style="width:30%; height:25%; color:white;">Pasien ID</th>
                                                            <th style="width:30%; height:25%; color:white;">Doctor of Choice</th>
                                                                <th style="width:30%; height:25%; color:white;">Medical Status</th>
                                                                      <th style="width:30%; height:25%; color:white;">Rx Status</th>
                                                            <th style="width:30%; height:25%; color:white;">Date Visit</th>

                                                            <th style="width:30%; height:25%; color:white;">Action</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                              @foreach($visit  as $index => $visit)
                                                              <td style="color:white;" > {{$index+1}}</td>
                                                              <td  style="color:white;" >{{$visit->id_pasien}}</td>
                                                              <td  style="color:white;" >{{$visit->id_dokter}}</td>
                                                              <td> @if($visit->status=='checked')<a href=''  class="btn btn-success btn-sm"> <i class="fas fa-check"></i>Have Been Checked</a>
                                                                   @else ($visit->status=='not checked')<a href=''  class="btn btn-danger btn-sm"> <i class="fas fa-times"></i>Not Checked Yet</a> @endif
                                                              </td>
                                                              <td> @if($visit->status_obat==0)<a href=''  class="btn btn-outline-danger btn-sm "> <i class="	fas fa-file-prescription"></i>Not Avaible</a>
                                                                 @elseif ($visit->status_obat==1)<a href=''  class="btn btn-outline-warning btn-sm"> <i class="fas fa-file-prescription"></i>Processed</a>
                                                                 @elseif ($visit->status_obat==2)<a href=''  class="btn btn-outline-success btn-sm"> <i class="fas fa-file-prescription"></i>Done</a>
                                                                  @endif



                                                              </td>
                                                              <td  style="color:white;" >{{$visit->tgl_kunjungan}}</td>

                                                            <td>
                                                              <div class="btn-group">
                                                                <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  <i class="	fas fa-cogs"></i>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                  <a class="dropdown-item" href="/visit/{{$visit->id}}/edit">Edit</a>
                                                                  <a class="dropdown-item" href="/visit/{{$visit->id}}/delete">Delete</a>
                                                              </div>
                                                            </td>
                                                          </tr>
                                                      </tbody>
                                                      @endforeach
                                                    </table>

                                    </div>
                                  </div>
                                </div>
                                      <a href='{{url('frontoffice/pasiendata')}}' class="btn btn-secondary"> <i class="		fas fa-arrow-left" style="font-size:24px;border-radius:100px; "></i> </a>
                              </div>

                            </div>




  </body>
<script type="text/javascript">
  $('.dropdown-toggle').dropdown()
</script>
</html>
@endsection
