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
      <a  style="color:white;" class="nav-link " href='{{url('frontoffice/index')}}'>Patient Registation</a>
    </li>
    <li class="nav-item"  style="font-size:12px;">
      <a style="color:white;" class="nav-link" href='{{url('frontoffice/pasiendata')}}'>Patient Data</a>
    </li>
    <li class="nav-item"  style="font-size:12px;">
      <a style="color:white;" class="nav-link" href='{{url('frontoffice/doctorschedule')}}'>Doctor Schedule</a>
    </li>
    <li class="nav-item"  style="font-size:12px;">
      <a class="nav-link active" href='{{url('frontoffice/doctor')}}'>Doctor Data</a>
    </li>

  </ul>
    @endsection

    @section('isi')
    <div class="wrapper" style="border-radius:25px;">
        <div class="container-fluid" style="background-color:#203e4a; border-radius:10px;border-style:solid; border-color:lightblue;height:100%; width:100%;">
    <div class="row">
      @if(session('sukses'))
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>{{session('sukses')}}</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>
      @endif


   @foreach($dokter as $index => $data)

        <div class="col-6" >
          <div class="card text-white bg-info mb-12" style="max-width: 20rem; border-style:solid; border-color:lightblue;">
            <img src="{{asset('storage/'.$data->avatar)}}" class="rounded" alt="" style=" height:100%;width:100%;">
               <div class="card-header" style="font-size:12px;">{{$data->name}}</div>
               <div class=0"card-body">
                 <div class="group card-name" style="padding:5px;">
                 <p style="color:white;"><i class="	fas fa-id-card-alt">&nbsp;&nbsp;NIP : &nbsp; {{$data->nip}}</i></p>
                 <p style="color:white; "><i class="	fas fa-user-md">&nbsp;&nbsp;Name : &nbsp;{{$data->name_dokter}}</i></p>
                 <p style="color:white; "><i class="	fas fa-stethoscope">&nbsp;&nbsp;Specialist : &nbsp;{{$data->specialist}}</i></p>



                 </div>
                 @if($data->status_dokter=='ada')<button type="button" data-status="{{$data->status_dokter}}" data-visitid="{{$data->id}}" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editstatus" name="button" ><i class="fas fa-check"></i> Avaible</button>
                     @else ($data->status_dokter=='tidak ada')<button type="button" data-status="{{$data->status_dokter}}" data-visit="{{$data->id}}" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#editstatus" name="button"><i class="fas fa-times"></i> Not Avaible </button>@endif

               </div>
            </div>
        </div>
@endforeach

  </div>
      </div>
</div>
  </body>

</html>
@endsection
