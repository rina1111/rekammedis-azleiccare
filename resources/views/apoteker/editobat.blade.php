@extends ('layouts.app')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
  </head>
  <body style="background-color:lightgrey;">

    @section('navbar')
    <ul class="nav nav-tabs">
      <li class="nav-item" style="font-size:12px;">
        <a   class="nav-link active " href='{{url('apoteker/index')}}'>Darshboard</a>
      </li>
    <li class="nav-item" style="font-size:12px;">
      <a  style="color:white;" class="nav-link " href='{{url('apoteker/obat')}}'>Medicine Data</a>
    </li>

    <li class="nav-item" style="font-size:12px;">
      <a  style="color:white;" class="nav-link " href='{{url('apoteker/resepobat')}}'>Doctor's Prescription </a>
    </li>
    <li class="nav-item" style="font-size:12px;">
      <a  style="color:white;" class="nav-link " href='{{url('apoteker/transaction')}}'>Medicine Transaction</a>
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


                            <!----editobat--->

          <div class="modal-content" style="background-color:lightblue;">
            <div class="modal-header"style="background-color:grey;">
              <h5 class="modal-title" style="color:white; align:center;">Edit Medicine</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="post" action="/update/{{$obat->id}}/obat" >
              {{ csrf_field() }}

           <input type="hidden"name="id_obat" id="id_obat" >
              <label for="inputCity">Medicine</label>
             <input type="text" class="form-control" name="nm_obat" id="nm_obat" value="{{$obat->nm_obat}}" >
             <hr>
             <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputCity">Type of Medicine</label>
                <input type="text" name="golongan" class="form-control" id="golongan" value="{{$obat->golongan}}">
              </div>
              <div class="form-group col-md-3">
                <label for="inputState">Price</label>
                 <input type="text" name="harga" class="form-control" id="harga" value="{{$obat->harga}}">
              </div>
              <div class="form-group col-md-3">
                <label for="inputState">Item</label>
                 <input type="text" name="satuan" class="form-control" id="satuan" value="{{$obat->satuan}}">

              </div>
              <div class="form-group col-md-2">
                <label for="inputZip">Stock</label>
                <input type="text" name="stok" class="form-control" id="stok" value="{{$obat->stok}}">
              </div>
            </div><hr>
              <label for="inputCity">Status</label><hr>
              <select name="status" id="status" class="form-control" value="{{$obat->status}}" required="">
                            <option value="0">Ready Stock</option>
                            <option value="1" >Out of Stock</option>
                  </select> <hr>
                  <div class="">

                    <label for="inputCity">Photo</label><hr>
                    Current avatar: <br>
                    @if($obat->gambar)
                    <img src="{{asset('storage/'.$obat->gambar)}}" width="120px" />
                    <br>
                    @else
                    No avatar
                    @endif
                      <input type="file" name="gambar" value="">
                  </div>

              <label for="inputCity">Info</label><hr>
              <textarea  class="form-control" name="ket" rows="8" cols="30" id="ket">{{$obat->ket}}</textarea>
            </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-success" id="btn-save">Save</button>
           </div>
           </form>

            </div>
          </div>
        </div>
      </div>


@endsection

  </body>
</html>
@endsection
