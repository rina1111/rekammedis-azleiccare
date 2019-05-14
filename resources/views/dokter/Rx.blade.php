@extends ('dokter.layouts')

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
        <a style="color:white;" class="nav-link " href="">Darshboard</a>
      </li>

    <li class="nav-item"  style="font-size:12px;">
      <a  class="nav-link active  " href='{{url('dokter/visitor')}}'>Visitor Data</a>
    </li>
    <li class="nav-item"  style="font-size:12px;">
      <a style="color:white;" class="nav-link" href=''>Medical Record Data</a>
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
                      <div class="container" id="rx" style="background-color:white;border-style:solid; border-color:lightblue;height:100%;">

                          <article class="part card-details" >

                              <h1>
                              Add Medicine Prescription
                              </h1>
                              @foreach($visit as $visitor)
                            <li  style="border-bottom:double;">Patient Name <span  style="padding-left:13px;">:</span> <span>{{$visitor->name}}</span> </li>
                            <li style="border-bottom:double;" >Age <span  style="padding-left:70px;">:</span> <span>{{$visitor->age}}</span> </li>
                            <li style="border-bottom:double;">Doctor <span  style="padding-left: 55px;">:</span> <span>{{$visitor->name_dokter}} </span></li>
                            <li style="border-bottom:double;">Gender <span  style="padding-left: 50px;">:</span> <span>{{$visitor->gender}} </span></li>
                              @endforeach
                              <br>


                            <button type="button" data-toggle="modal" data-target="#tambahobat" name="button" class="btn btn-success"> <i class="fas fa-plus"></i> </button>

                            <table class="table table-bordered" id="table">
                                 <tr>
                                   <th width="150px">No</th>
                                      <th>Medicine ID</th>
                                   <th>Medicine</th>
                                   <th>Dose</th>
                                   <th>How to Consume</th>
                                   <th>Quantityt</th>
                                   <th>Action</th>

                                 </tr>

                                 <?php  $no=1; ?>
                                 @foreach ($resep as $resep)
                                   <tr class="post{{$resep->id}}">
                                     <td>{{ $no++ }}</td>
                                     <td>{{ $resep->id_resep }}</td>
                                     <td>{{ $resep->obat }}</td>
                                     <td>{{ $resep->dosis }}</td>
                                      <td>{{ $resep->konsumsi }}</td>
                                     <td>{{ $resep->jumlah }}</td>

                                     <td>


                                           <a data-toggle='modal' href="#modal-hapus " class='btn btn-danger btn-sm'  > <i class="fas fa-minus"></i></a>


                                     </td>
                                   </tr>
                                   @endforeach
                               </table>
                                <hr>
                                  <a href="{{url('dokter/visitor')}}" class="btn btn-dark">Back </a>
                          </article>
                          <div class="part bg" style="background-image:url({{asset('image/rx.png')}})">
                          </div>
                      </div>

                  </div>
                </div>
                </div>

              </div>

              <div class="modal fade " id="tambahobat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
              <div class="modal-dialog" role="document" >
                <div class="modal-content"style="background-color:lightblue;">
                  <div class="modal-header" style="background-color:grey;">

                  <h3 style="color:white; align:center;">Add Medicine</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form class="" action="/rx/{{$data->id}}/create" method="post">
                      {{method_field("")}}
                    @csrf
                     <label for="inputCity">Visitor ID</label>
                    <input type="text" class="form-control" name="id_visitor" id="id" value="{{$data->id}}">
                    <hr>
                    <div class="form-row">
                     <div class="form-group col-md-6">
                       <label for="inputCity">Medicine</label>
                    <select class="form-control" name="obat">
                      @foreach($obat as $obat)
                      <option value="{{$obat->nm_obat}}">{{$obat->nm_obat}}</option>
                      @endforeach
                    </select>
                     </div>
                     <div class="form-group col-md-4">
                       <label for="inputState">Dose</label>
                        <input type="text" name="dosis" class="form-control" id="inputZip">
                     </div>
                     <div class="form-group col-md-2">
                       <label for="inputZip">Quantity</label>
                       <input type="text" name="jumlah" class="form-control" id="inputZip">
                     </div>
                     <label for="inputCity">How to Consume</label>
                    <input type="text" class="form-control" name="konsumsi" >

                   </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" id="btn-save">Save</button>
                  </div>
                  </form>

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
                    <div class="modal-footer">
                      <a href="{{ url('/rx/{{$resep->id}}/delete') }}" class="btn btn-outline btn-warning">Yes</a>
                    </div>
                  </div>

  </body>
<script type="text/javascript">
  $('.dropdown-toggle').dropdown()
</script>
</html>
@endsection
