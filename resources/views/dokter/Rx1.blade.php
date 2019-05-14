@extends ('dokter.layouts')

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
  <body >
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    @section('navbar')
    <ul class="nav nav-tabs">
      <li class="nav-item" style="font-size:12px;">
        <a style="color:white;" class="nav-link " href="">Darshboard</a>
      </li>

    <li class="nav-item"  style="font-size:12px;">
      <a  class="nav-link active  " href='{{url('dokter/visitor')}}'>Visitor Data</a>
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
    </div>
      @endif

                  <div class="wrapper">
                      <div class="container" id="rx" style="background-color:white;border-style:solid; border-color:lightblue;height:100%; width:100%;">

                          <article class="part card-details" >

                              <h1>
                              Add Medicine Prescription
                              </h1>

                              <br>
                              <li  style="border-bottom:double;">Visitor ID <span  style="padding-left:45px;">:</span> <span>{{$data->id}}</span> </li>
                              @foreach($visit as $visitor)
                            <li  style="border-bottom:double;">Patient Name <span  style="padding-left:13px;">:</span> <span>{{$visitor->name}}</span> </li>
                            <li style="border-bottom:double;" >Age <span  style="padding-left:70px;">:</span> <span>{{$visitor->age}}</span> </li>
                            <li style="border-bottom:double;">Gender <span  style="padding-left: 50px;">:</span> <span>{{$visitor->gender}} </span></li>
                              <li style="border-bottom:double;">Doctor <span  style="padding-left: 55px;">:</span> <span>{{$visitor->name_dokter}} </span></li>
                                <li style="border-bottom:double;">Diagnosis <span  style="padding-left: 40px;">:</span> <span>{{$visitor->diagnosa}} </span></li>
                              @endforeach
</article>
        <table class="table table-bordered" id="table">

            <tr>

              <th>Medicine</th>
              <th>Dose</th>
              <th>How to Consume</th>
              <th>Quantityt</th>

            <th >
              <a href="#create" data-toggle="modal" class=" btn btn-success btn-sm">
                <i class="fas fa-plus"></i>
              </a>
            </th>
          </tr>
          {{ csrf_field() }}

          @foreach ($resep as $value)
          <tr class="">
              <td>{{ $value->nm_obat }}</td>
              <td>{{ $value->dosis }}</td>
              <td>{{ $value->konsumsi }}</td>
              <td>{{ $value->jumlah }}</td>
              <td >
                <a data-toggle='modal' href="#modal-hapus" class="delete-modal btn btn-info btn-danger btn-sm " data-id_resep="{{$value->id}}"  data-id_visitor="{{$value->visitor_id}}" data-obat="{{$value->obat_id}}"
                  data-dosis="{{$value->dosis}}"  data-konsumsi="{{$value->konsumsi}}"  data-jumlah="{{$value->jumlah}}">
                  <i class="fa fa-trash"></i>
                </a>


              </td>
            </tr>
          @endforeach
        </table>
      </div>
    </article>
    <div class="part bg" style="background-image:url({{asset('image/rx.png')}})">
    </div>
</div>
<a href='{{url('dokter/visitor')}}' class='btn btn-dark'>Back</a>




<div class="modal fade " id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
<div class="modal-dialog" role="document" >
  <div class="modal-content"style="background-color:lightblue;">
    <div class="modal-header" style="background-color:grey;">

    <h3 style="color:white; align:center;">Add Medicine Prescription</h3>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form class="form-horizontal" role="form" method="post" action="/addPost/{{$data->id}}">
        {{csrf_field()}}
        @csrf
        <input id="signup-token" name="_token" type="hidden" value="{{csrf_token()}}">

       <label for="inputCity">Visitor ID</label>
      <input type="text" class="form-control" name="visitor_id" id="visitor_id" value="{{$data->id}}">
       <p class="error text-center alert alert-danger hidden"></p>
      <hr>

       <div class="form-group ">
         <label for="inputCity">Medicine</label>
        <select class="form-control validate[required]" name="obat_id">
          <option value="">Choose...</option>
          @foreach($obat as $obat)

          <option value="{{$obat->id}}">{{$obat->nm_obat}}</option>
          @endforeach
        </select>
              <p class="error text-center alert alert-danger hidden"></p>
          <div id="obatlist">
          </div>
         </div>


      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputState">Dose</label>
           <input type="text" name="dosis" class="form-control" id="dosis">
            <p class="error text-center alert alert-danger hidden"></p>
        </div>
        <div class="form-group col-md-6">
          <label for="inputZip">Quantity</label>
          <input type="text" name="jumlah" class="form-control" id="jumlah">
           <p class="error text-center alert alert-danger hidden"></p>
        </div>
      </div>

       <label for="inputCity">How to Consume</label>
      <input type="text" class="form-control" name="konsumsi" id="konsumsi">
     <p class="error text-center alert alert-danger hidden"></p>
     <div class="modal-footer">
       <button class="btn btn-warning" type="submit" id="add">
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
</div>
</div>
<div class="modal modal-danger fade" id="modal-hapus" >
  <div class="modal-dialog">
    <div class="modal-content" style="background-color:maroon;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

        <h4 class="modal-title">x</h4>
      </div>
      <div class="modal-body">
        <h4 style="color:white;"><b><i>Are you sure want to delete data ?</i></b></h4>
      </div>
      @foreach($resep as $value)
      <div class="modal-footer">
        <a href="/rx/{{$value->id}}/delete" class="btn btn-outline btn-warning">Yes</a>
      </div>
      @endforeach
    </div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!---autocomplatescript---->
<script type="text/javascript">
$(document).ready(function(){
 $('#obat_id').keyup(function(){
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('obat.fetch') }}",
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#obatlist').fadeIn();
                    $('#obatlist').html(data);
          }
         });
        }
    });

    $(document).on('click', 'li', function(){
        $('#obat_id').val($(this).text());
        $('#obatlist').fadeOut();
    });

});
</script>
  </body>
</html>
@endsection
