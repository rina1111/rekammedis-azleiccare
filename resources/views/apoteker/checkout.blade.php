@extends ('layouts.app')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
      <link rel="stylesheet" href="{{asset('css/cart.css')}}">
  </head>
  <body style="background-color:lightgrey;">

    @section('navbar')
    <ul class="nav nav-tabs">
      <li class="nav-item" style="font-size:12px;">
        <a style="color:white;"  class="nav-link " href="">Checkout</a>
      </li>
    @endsection



    @section('isi')
      @if(Cart::count()>0)
    <div class="wrapper" style="border-radius:25px;">
            <div class='window'>
              <div class='order-info'>
                <div class='order-info-content'>
                  <h2>Order Summary</h2>
                          <div class='line'></div>
                           @foreach($data as $pro)
                  <table class='order-table'>
                    <tbody>
                      <tr>
                        <td><img src="{{asset('storage/'.$pro->options->img)}}" class='full-width'></img>
                        </td>
                        <td>
                          <br> <span class='thin'>{{$pro->name}}</span>
                          <br>Qty: {{$pro->qty}}<br> <span class='thin small'>{{$pro->options->size }}<br><br></span>
                        </td>

                      </tr>
                      <tr>
                        <td>
                          <div class='price'>Rp.{{$pro->price}} {{$pro->options->item}}</div>
                        </td>
                      </tr>
                    </tbody>

                  </table>
                  @endforeach
                  <hr>
                          <div class='total'>
                <strong style="align:center;">Total : Rp.{{Cart::subtotal()}}</strong>
                </div>
                </div>
          </div>
          @endif
                  <div class='credit-info'>
                    <div class='credit-info-content'>

                      <img src='https://png.icons8.com/checkout/win8/1600' height='80' class='credit-card-image' id='credit-card-image'></img>

                      <form action="{{url('/placeOrder')}}" method="post">
                        <input type="hidden" value="{{csrf_token()}}" name="_token"/>
                          <label for="">Invoice Number</label>
                          <input class="form-control" type="text" name="invoice" value=""><hr>
                          <label for="">Visitor ID</label>

                      <select  class="form-control" name="id_pembeli">
                        <option value="">Choose</option>
                        @foreach($visit as $visit)
                        <option value="{{$visit->id}}">{{$visit->id}}</option>
                        @endforeach
                      </select>

                      <button class='pay-btn'>Checkout</button>
                    </form>
                    </div>

                  </div>
                </div>

        </div>

  </body>
</html>
@endsection
