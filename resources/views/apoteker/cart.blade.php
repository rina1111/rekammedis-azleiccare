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
  </head>
  <body style="background-color:lightgrey;">

    @section('navbar')
    <ul class="nav nav-tabs">
      <li class="nav-item" style="font-size:12px;">
        <a style="color:white;"  class="nav-link " href="">Darshboard</a>
      </li>
    <li class="nav-item" style="font-size:12px;">
      <a  style="color:white;" class="nav-link " href=''>Medicine Data</a>
    </li>

    <li class="nav-item" style="font-size:12px;">
      <a   class="nav-link active " href=''>Doctor's Prescription </a>
    </li>
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
                    <div class="collapse" id="collapseExample" >
                      <div class="card card-body">
                        <form style="background-color:#203e4a; border-style:solid; border-color:lightblue; padding:10px;">

                            <label  for="inputPassword4" style="color:white; font-family:times; font-size:16px;">Visitor ID</label><hr style="background-color:white;">
                            <input type="text" class="form-control" name="" value="">


                        <div class="form-row">
                          <div class="form-group col-md-6">
                              <label  for="inputPassword4" style="color:white; font-family:times; font-size:16px;">Medicine</label><hr style="background-color:white;">
                              <select class="nm_obat form-control" name="" id="nm_obat">
                              <option value="">Choose</option>
                            
                              </select>
                          </div>

                          <div class="form-group col-md-6">
                            <label  for="inputPassword4" style="color:white; font-family:times; font-size:16px;">Quantity</label><hr style="background-color:white;">
                            <input type="text" class="form-control" name="" value="">
                          </div>


                        </div>


                        <button type="submit" class=" btn btn-outline-success">Add</button>

                      </form>
                      <hr>
                      <div class="wrapper" style="background-color:#203e4a; border-style:solid; border-color:lightblue; padding:10px;">
                        <table class="table table-striped" style="color:white">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Medicine</th>
                              <th>Price</th>
                              <th>Quantity</th>
                              <th>Total</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($order as $orders)
                            <tr>
                              <td>{{$orders->invoice_number}}</td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>

                      </div>

                    </div>

                  </div>

                    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>



<!----------add obat--->


    <!----editobat--->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   <!---autocomplatescript---->




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

      @endsection



  </body>
</html>
@endsection
