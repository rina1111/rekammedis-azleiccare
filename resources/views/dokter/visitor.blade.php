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
        <a style="color:white;"  class="nav-link " href='{{url('dokter/index')}}'>Darshboard</a>
      </li>

    <li class="nav-item"  style="font-size:12px;">
      <a class="nav-link active" href='{{url('dokter/visitor')}}'>Visitor Data</a>
    </li>

  </ul>
    @endsection

    @section('isi')
      @include('sweet::alert')
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

      <div class="wrapper" id="visits">

        <table class="table table-bordered" style="font-size:142x; text-align:center; ">
            <thead >
              <tr class="bg-info">


                <th>Pasien ID</th>
                <th>Doctor of Choice</th>
                <th>Medical Status</th>
                <th>Rx Status</th>
                <th >Date Visit</th>
                <th>Check Now</th>
                <th>Medical prescription</th>

              </tr>
            </thead>
            <tbody>
                <tr>

                  @foreach($visit as $visit)
                    <td>{{$visit->id_pasien}}</td>
                    <td>{{$visit->id_dokter}}</td>
                    <td> @if($visit->status=='checked')<button type="button" data-status="{{$visit->status}}" data-visitid="{{$visit->id}}" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editstatus" name="button"><i class="fas fa-check"></i> Have Been Checked </button>
                         @else ($visit->status=='not checked')<button type="button" data-status="{{$visit->status}}" data-visit="{{$visit->id}}" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#editstatus" name="button"><i class="fas fa-times"></i> Not Checked Yet </button>@endif
                         <td> @if($visit->status_obat==0)<a data-toggle="modal"  href='#editstatus_resep'  class="btn btn-outline-danger btn-sm "> <i class="	fas fa-file-prescription"></i>Not Avaible</a>
                            @elseif ($visit->status_obat==1)<a href=''  class="btn btn-outline-warning btn-sm"> <i class="fas fa-file-prescription"></i>Processed</a>
                            @else ($visit->status_obat==2)<a href=''  class="btn btn-outline-success btn-sm"> <i class="fas fa-file-prescription"></i>Process Done</a>


                             @endif

                         </td>
                    <td>{{$visit->tgl_kunjungan}}</td>
                    <td>
                      <div class="btn-group">
                        <button type="button" class="btn btn-secondary btn-sm dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-stethoscope"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a href='/visit/{{$visit->id}}/getrecord' class="dropdown-item">Add Medical Record</a>
                          <a href='/visit/{{$visit->id}}/history' class="dropdown-item">History</a>
                          <a class="dropdown-item" href="/medical/{{$visit->id}}/edit">Edit Medical Record</a>
                          <a class="dropdown-item" href="/medical/{{$visit->id}}/delete">Delete Medical Record</a>
                      </div>
                    </div>

                    </td>
                    <td>
                      <div class="btn-group">
                        <button type="button"  class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-file-prescription"></i>
                        </button>
                        <div class="dropdown-menu">

                              <a href='/dokter/{{$visit->id}}/Rx1' class="dropdown-item">Add Medical Prescription</a>
                      </div>
                    </div>

                    </td>

                </tr>
            </tbody>
@endforeach
          </table>

  <!--modal--->
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
        <form class="" action="/visit/{{$visit->id}}/updatestatus_obat" method="post">
          {{method_field("")}}
        @csrf
        <input type="hidden" name="visit_id" id="id" value="">
          <label for="jam" style="color:white; font-size:20px; text-align:center;" >{{'Status'}}</label><hr>
        <select class="form-control" name="status_obat" id="status">
          <option value="0">Not Avaible</option>
          <option value="1">Process</option>
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

<div class="modal fade " id="editstatus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
<div class="modal-dialog" role="document" >
  <div class="modal-content"style="background-color:lightblue;">
    <div class="modal-header" style="background-color:grey;">

    <h3 style="color:white; align:center;">Update Medical Status</h3>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form class="" action="/visit/{{$visit->id}}/updatestatus" method="post">

      @csrf
      <input type="hidden" name="visit_id" id="id" value="">
        <label for="jam" style="color:white; font-size:20px; text-align:center;" >{{'Status'}}</label><hr>
      <select class="form-control" name="status" id="status">
        <option value="checked">Have Been Checked</option>
        <option value="not checked">Not Checked Yet</option>
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
<!---->
<script type="text/javascript">
  $('.dropdown-toggle').dropdown()
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script>

$('#editstatus').on('show.bs.modal', function (event) {

var button = $(event.relatedTarget) // Button that triggered the modal
var status = button.data('status')
var id = button.data('visitid')
var id = button.data('visit')
// Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
modal.find('.modal-body #status').val(status)
modal.find('.modal-body #visit_id').val(id)
})

</script>


  </body>

</html>
@endsection
