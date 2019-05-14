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
      <a  class="nav-link  active " href='{{url('apoteker/obat')}}'>Medicine Data</a>
    </li>

    <li class="nav-item" style="font-size:12px;">
      <a  style="color:white;" class="nav-link " href='{{url('apoteker/resepobat')}}'>Doctor's Prescription </a>
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
        <div class="col-12">
          <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>{{session('sukses')}}</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>

        </div>

        @endif
        @if(session('gagal'))
        <div class="col-12">
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>{{session('gagal')}}</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
        </div>
      </div>
        @endif

                    <div class="wrapper" style="border-radius:25px;">
                        <div class="container-fluid" style="background-color:#203e4a; border-radius:10px;border-style:solid; border-color:lightblue;height:100%;">

                            <article class="part card-details">

                                <h1 style="color:white;">Medicine Data</h1> <hr>
                          <a data-toggle="modal" href="#createobat" class="btn btn-success"><i class="fas fa-plus"></i></a>
                              <table id="table" class="table table-striped table-bordered"  style="font-size:14px; color:white">
                                  <tr>

                                    <th width="15px">No</th>
                                    <th>Medicine</th>
                                    <th>Drug Class</th>
                                    <th>Price</th>
                                    <th>Item</th>
                                    <th>Stock</th>
                                    <th>Info</th>
                                    <th>Photo</th>
                                    <th>Status</th>
                                   <th>Action</th>

                                  </tr>
                                  {{ csrf_field() }}

                                  @foreach($data as $index=> $obat)

                                    <tr>
                                      <td>{{ $index+1 }}</td>
                                      <td>{{$obat->nm_obat}}</td>
                                      <td>{{$obat->golongan}}</td>
                                       <td>Rp.{{$obat->harga}}</td>
                                       <td>{{$obat->satuan}}</td>
                                      <td>{{$obat->stok}}</td>
                                      <td>{{$obat->ket}}</td>
                                      <td>@if($obat->gambar)
                                          <img src="{{asset('storage/'.$obat->gambar)}}" width="70px"/>
                                          @else
                                          N/A
                                          @endif</td>
                                      <td>@if($obat->status==0)<button type="button" data-status="{{$obat->status}}" data-visitid="{{$obat->id_obat}}" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editstatus" name="button"><i class="fas fa-check"></i> Ready Stock </button>
                                           @else ($obat->status==1)<button type="button" data-status="{{$obat->status}}" data-visit="{{$obat->id_obat}}" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#editstatus" name="button"><i class="fas fa-times"></i> Out of Stock </button>@endif</td>

                                      <td>
                                            <a href="/edit/{{$obat->id}}/obat" class="btn btn-primary btn-sm" ><i class="far fa-edit"></i></a>
                                            <a class='btn btn-danger btn-sm' href="/delete/{{$obat->id}}/obat" > <i class="fas fa-minus"></i></a>
                                      </td>
                                    </tr>
                                     @endforeach
                                </table>

                                  <hr>
                                    <a href='{{url('apoteker/index')}}' class="btn btn-dark">Back </a>

                        </div>
                    </div>

<!----------add obat--->
              <div class="modal fade" id="createobat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content" style="background-color:lightblue;">
                      <div class="modal-header"style="background-color:grey;">
                        <h5 class="modal-title" style="color:white; align:center;">Add Medicine</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          <form class="form-horizontal" method="post" action="/addobat" style="height:100%;" enctype="multipart/form-data">
                        {{ csrf_field() }}
                         <label for="inputCity">Medicine</label>
                        <input type="text" class="form-control" name="nm_obat" id="nm_obat" >

                        <hr>


                           <label for="inputCity">Type of Medicine</label>
                           <input type="text" name="golongan" class="form-control" id="golongan">



                           <label for="inputState">Price</label>
                            <input type="text" name="harga" class="form-control" id="harga">




                           <label for="inputState">Item</label>
                            <input type="text" name="satuan" class="form-control" id="satuan">



                           <label for="inputZip">Stock</label>
                           <input type="text" name="stok" class="form-control" id="stok">

                         <hr>
                                <label for="inputZip">Status</label>
                                <select class="form-control" name="status">
                                  <option value="">choose..</option>
                                  <option value="0">Ready Stock</option>
                                    <option value="1">Out of Stock</option>
                                </select>

                                <label for="inputCity">Photo</label><hr>
                            <input class="form-control" type="file" name="gambar" value="">
                         <label for="inputCity">Info</label><hr>
                      <textarea name="ket" rows="5" cols="50  "></textarea>

                          <div class="modal-footer">
                            <button class="btn btn-warning" type="submit" >
                              <span class="fas fa-plus"></span>Save Post
                            </button>
                            <button class="btn btn-warning" type="button" data-dismiss="modal">
                              <span class="glyphicon glyphicon-remobe"></span>Close
                            </button>
                          </div>
                        </form>

                       </div>
                      </div>
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
