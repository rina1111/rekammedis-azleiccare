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
        <a  style="color:white;" class="nav-link " href='{{url('frontoffice/index')}}'>Dashboard</a>
      </li>
    <li class="nav-item" style="font-size:12px;">
      <a  style="color:white;" class="nav-link " href='{{url('frontoffice/pendaftaranpasien')}}'>Patient Registation</a>
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
          <div class="card text-white bg-info mb-12" style="max-width: 15rem; border-style:solid; border-color:lightblue;">
            <img src="{{asset('storage/'.$data->avatar)}}" class="rounded" alt="" style=" height:50%;width:100%;">
               <div class="card-header" style="font-size:12px;">{{$data->name}}</div>
               <div class=0"card-body">
                 <div class="group card-name" style="padding:5px;">
                 <p style="color:white;"><i class=" fas fa-id-card-alt">&nbsp;&nbsp;NIP : &nbsp; {{$data->nip}}</i></p>
                 <p style="color:white; "><i class="  fas fa-user-md">&nbsp;&nbsp;Name : &nbsp;{{$data->name_dokter}}</i></p>
                 <p style="color:white; "><i class="  fas fa-stethoscope">&nbsp;&nbsp;Specialist : &nbsp;{{$data->specialist}}</i></p>



                 </div>
                 @if($data->status_dokter=='ada')<button type="button" data-status="{{$data->status_dokter}}" data-visitid="{{$data->id}}" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editstatus" name="button" ><i class="fas fa-check"></i> Avaible</button>
                     @else ($data->status_dokter=='tidak ada')<button type="button" data-status="{{$data->status_dokter}}" data-visit="{{$data->id}}" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#editstatus" name="button"><i class="fas fa-times"></i> Not Avaible </button>@endif

               </div>
            </div>
        </div>

    <style media="screen">
    .box{
  width: 1200px;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  grid-gap: 15px;
  margin: 0 auto;
}
.card{
  position: relative;
  width: 300px;
  height: 350px;
  background: #fff;
  margin: 0 auto;
  border-radius: 4px;
  box-shadow:0 2px 10px rgba(0,0,0,.2);
}
.card:before,
.card:after
{
  content:"";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 4px;
  background: #fff;
  transition: 0.5s;
  z-index:-1;
}
.card:hover:before{
transform: rotate(20deg);
box-shadow: 0 2px 20px rgba(0,0,0,.2);
}
.card:hover:after{
transform: rotate(10deg);
box-shadow: 0 2px 20px rgba(0,0,0,.2);
}
.card .imgBx{
position: absolute;
top: 10px;
left: 10px;
bottom: 10px;
right: 10px;
background: #222;
transition: 0.5s;
z-index: 1;
}

.card:hover .imgBx
{
  bottom: 80px;
}

.card .imgBx img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.card .details{
    position: absolute;
    left: 10px;
    right: 10px;
    bottom: 10px;
    height: 60px;
    text-align: center;
}

.card .details h2{
 margin: 0;
 padding: 0;
 font-weight: 600;
 font-size: 20px;
 color: #777;
 text-transform: uppercase;
}

.card .details h2 span{
font-weight: 500;
font-size: 16px;
color: #f38695;
display: block;
margin-top: 5px;
 }
    </style>

@endforeach

  </div>
      </div>
</div>
  </body>

</html>
@endsection
