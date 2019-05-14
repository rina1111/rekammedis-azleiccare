@extends ('layouts.app')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </head>
  <body style="background-color:lightgrey;">

    @section('navbar')
    <ul class="nav nav-tabs">
      <li class="nav-item" style="font-size:12px;">
        <a  style="color:white;"   class="nav-link " href='{{url('apoteker/index')}}'>Darshboard</a>
      </li>
    <li class="nav-item" style="font-size:12px;">
      <a style="color:white;" class="nav-link" href='{{url('apoteker/obat')}}'>Medicine Data</a>
    </li>

    <li class="nav-item" style="font-size:12px;">
      <a   class="nav-link active " href='{{url('apoteker/resepobat')}}'>Doctor's Prescription </a>
    </li>
    <li><a  style="color:white;"  class="nav-link " href="{{ url('apoteker/transaction') }}">New Medicine Transaction <span class="glyphicon glyphicon-saved" aria-hidden="true"></span></a></li>
    <li class="dropdown">
  <a style="color:white;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> Stored Transaction </a>
                         <ul class="dropdown-menu">
                           <?php
                             $tersimpan = \DB::table('save_transaksis')->get();
                           ?>
                           @foreach($tersimpan as $ts)
                           <li><a href="{{ url('open-transaksi/'.$ts->code) }}">{{ $ts->nama }}</a></li>
                           @endforeach
                         </ul>
                       </li>
  </ul>
    @endsection
    @section('content')

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

      )
      @section('isi')
      <div class="row">
        @if(session('sukses'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{session('sukses')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
      </div>
        @endif

                    <div class="wrapper" style="border-radius:25px;">
                        <div class="container-fluid" style="background-color:#203e4a; border-radius:10px;border-style:solid; border-color:lightblue;height:100%;">

                            <article class="part card-details">

                                <h1 style="color:white;">Doctor's Prescription</h1> <hr>

                              <table id="table" class="table table-striped table-bordered"  style="font-size:14px; color:white">
                                  <tr>
                                    <th>No</th>
                                <th>Date</th>
                                    <th>Visitor ID</th>
                                    <th>Medical Status </th>
                                    <th>Rx Status</th>
                                    <th>Rx</th>
                                   <th>Action</th>

                                  </tr>

                                  @foreach($visit as $index => $visitor)
                                  <tr>
                                    <td>{{$index+1}}</td>
                                    <td>{{$visitor->tgl_kunjungan}}</td>
                                    <td>{{$visitor->id}}</td>
                                    <td> @if($visitor->status=='checked')<a href=''  class="btn btn-success btn-sm"> <i class="fas fa-check"></i>Have Been Checked</a>
                                         @else ($visitor->status=='not checked')<a href=''  class="btn btn-danger btn-sm"> <i class="fas fa-times"></i>Not Checked Yet</a> @endif
                                    </td>
                                    <td> @if($visitor->status_obat==0)<a hdata-toggle='modal' href='#editstatus_resep'  class="btn btn-outline-danger btn-sm "> <i class="	fas fa-file-prescription"></i>Not Avaible</a>
                                       @elseif ($visitor->status_obat==1)<a data-toggle='modal' href='#editstatus_resep'  class="btn btn-outline-warning btn-sm"> <i class="fas fa-file-prescription"></i>Processed</a>
                                       @elseif ($visitor->status_obat==2)<a data-toggle='modal' href='#editstatus_resep'  class="btn btn-outline-success btn-sm"> <i class="fas fa-file-prescription"></i>Process Done</a>
                                        @endif</td>

                                            <td><a href="/apoteker/{{$visitor->id}}/detailresep" class="btn btn-success">  <i class="fas fa-file-prescription"></a></td>
                                              <td> <a href="" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i> </a> </td>
                                  </tr>
                                @endforeach
                                </table>

                                  <hr>
                                    <a href="{{url('apoteker/index')}}" class="btn btn-dark">Back </a>

                        </div>
                    </div>

<!----------add obat--->
<div class="modal fade " id="editstatus_resep" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
<div class="modal-dialog" role="document" >
  <div class="modal-content"style="background-color:lightblue;">
    <div class="modal-header" style="background-color:grey;">

    <h3 style="color:white; align:center;">Update Rx Status</h3>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form class="" action="/visit/{{$visitor->id}}/updatestatusobat" method="post">
        {{method_field("")}}
      @csrf
      <input type="hidden" name="visit_id" id="id" value="">
        <label for="jam" style="color:white; font-size:20px; text-align:center;" >{{'Status'}}</label><hr>
      <select class="form-control" name="status_obat" id="status">
        <option value="1">Process</option>
        <option value="2">Done</option>
      </select>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-secondary" id="btn-save">Update</button>
    </div>
    </form>
  </div>
</div>
</div>

    <!----editobat--->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


      @endsection



  </body>
</html>
@endsection
