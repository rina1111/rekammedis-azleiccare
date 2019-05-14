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
        <a style="color:white;"  class="nav-link " href="">Cart</a>
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
        <script>
         $(document).ready(function(){
           $("#CartMsg").hide();
           //$('#CartTotal').hide();
           @foreach($data as $pro)
           $("#upCart{{$pro->id}}").on('change keyup', function(){
             var newQty = $("#upCart{{$pro->id}}").val();
             var rowID = $("#rowID{{$pro->id}}").val();
             $.ajax({
                 url:'{{url('/cart/updatecart')}}',
                 data:'rowID=' + rowID + '&newQty=' + newQty,
                 type:'get',
                 success:function(response){
                   $("#CartMsg").show();
                   console.log(response);
                   $("#CartMsg").html(response);
                 }
             });
           });
           @endforeach


         });
         </script>
              @if(Cart::count()>0)
         <div class="wrapper" style="border-radius:25px;">
             <div class="container-fluid" style="background-color:#203e4a; border-radius:10px;border-style:solid; border-color:lightblue;height:100%;">
               <div class="cart">
                   <div class="col-sm-12">
                     <h2 style="color:white;">Shopping Basket</h2>
                     <div class="row">
                         <div class="col-sm-8">
                           @if(isset($msg))
                           <div class="alert alert-info">{{$msg}}</div>
                           @endif
                           <div class="alert alert-info" id="CartMsg"></div>
                            <hr>
               <table id="cart" class="table table-hover table-condensed">
           <thead>
           <tr>
             <th style="width:50%;color:white;">Product</th>
             <th style="width:10%;color:white;">Price</th>
             <th style="width:8%;color:white;">Quantity</th>
             <th style="width:22%;color:white;" class="text-center">Subtotal</th>
             <th style="width:10%;color:white;"></th>
           </tr>
         </thead>
         <tbody>
           @foreach($data as $pro)

           <tr>
             <td style="color:white;" data-th="Product">
               <div class="row">
                 <div class="col-sm-4 hidden-xs"><img src="{{asset('storage/'.$pro->options->img)}}" alt="..." class="img-responsive"/></div>
                 <div class="col-sm-8">
                   <h4 class="nomargin">{{$pro->name}}</h4>
                   <p>{{$pro->options->size}}</p>
                 </div>
               </div>
             </td>
             <td style="color:white;" data-th="Price">Rp.{{$pro->price}} {{$pro->options->item}}</td>
             <td data-th="Quantity">
               <input type="hidden" value="{{$pro->rowId}}"
                id="rowID{{$pro->id}}"/>
               <input type="number" max="10" min="1"
               value="{{$pro->qty}}" class="qty-fill"
               id="upCart{{$pro->id}}">
             </td>
             <td style="color:white;" data-th="Subtotal" class="text-center">{{$pro->subtotal}}</td>
             <td class="actions" data-th="">
            <a class="cart-remove btn btn-info btn-sm" href=""><i class="fas fa-sync"></i></a>
               <a href="{{url('cart/remove')}}/{{$pro->rowId}}" class="cart-remove btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
             </td>
           </tr>
           @endforeach
         </tbody>
         <tfoot>
           <tr class="visible-xs">
             <td style="color:white" class="text-center"><strong></strong></td>
           </tr>
           <tr>
             <td><a href="#" class="btn btn-warning"><i class="fas fa-angle-left"></i> Continue Shopping</a></td>
             <td colspan="2" class="hidden-xs"></td>
             <td style="color:white"  class="hidden-xs text-center"><strong>Total Rp. {{Cart::subtotal()}}</strong></td>
             <td><a href="{{url('apoteker/checkout')}}"  class="btn check_out btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
           </tr>
         </tfoot>
       </table>
      </div>
      </div>
    </div>
  </div>

    @else
    <div class="row">
       <div class="col-md-2 col-md-offset-5 top25">
        <img src="asset('image/empty.png')"
        class="img-response"/>
        <br><br>
        <p style="text-align:center">Nothing in the bag<br><br>
        <a href="{{url('products')}}"
        class="btn btn-fill btn-primary">Continue Shopping</a>
        </p>
      </div>
      </div>

    @endif


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
