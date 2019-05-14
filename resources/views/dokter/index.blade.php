<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    <!-- CSRF Token -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
    <link rel="stylesheet" href="{{asset('css/simple-sidebar.css')}}">
    <link rel="stylesheet" href="{{asset('css/arrows.css')}}">
    <link rel="stylesheet" href="{{asset('css/sb-admin.css')}}">
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
    <link rel="stylesheet" href="{{asset('css/card.css ')}}">
      <link rel="stylesheet" href="{{asset('css/cardku.css ')}}">
    <link rel="stylesheet" href="{{asset('css/sb-admin.min.css')}}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{('azleic-care')}}</title>
    <!-- Scripts -->


    <script src="{{ asset('js/app.js') }}" defer></script>
      <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body >
    <div id="app">


    </div>
    <div class="d-flex" id="wrapper">
           <!-- Sidebar -->
     <div class=" border-right" id="sidebar-wrapper" style="max-width:13rem; background-color:#203e4a;">
        <div class="card text-white mb-3" style="max-width: 13rem; background-color:#203e4a; border-radius:15px;border-style:solid;"><hr>
         <img src="{{asset('image/azleic.png')}}" alt=""style="max-width: 12rem;">
          <a id="clock" class="btn btn-outline-info btn-sm"></a>
           <script type="text/javascript">
           <!--
           function showTime() {
               var a_p = "";
               var today = new Date();
               var curr_hour = today.getHours();
               var curr_minute = today.getMinutes();
               var curr_second = today.getSeconds();
               if (curr_hour < 12) {
                   a_p = "AM";
               } else {
                   a_p = "PM";
               }
               if (curr_hour == 0) {
                   curr_hour = 12;
               }
               if (curr_hour > 12) {
                   curr_hour = curr_hour - 12;
               }
               curr_hour = checkTime(curr_hour);
               curr_minute = checkTime(curr_minute);
               curr_second = checkTime(curr_second);
            document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
               }

           function checkTime(i) {
               if (i < 10) {
                   i = "0" + i;
               }
               return i;
           }
           setInterval(showTime, 500);
           //-->
           </script>


       <a class="btn btn-outline-info btn-sm" > Hi! {{ Session::get('name_dokter') }} </a>
       <a class="btn btn-outline-info btn-sm" style="color:lightblue; "  href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
         </a>

         <form id="logout-form" action="{{ url('dokter/logout') }}" method="get">
             @csrf
         </form>

         <div class="card-body">

         </div>
         </div>
         </div>
         <div id="page-content-wrapper">
        <nav class="navbar" style="background-color:#203e4a; color:white;">
          <ul class="nav nav-tabs">
            <li class="nav-item" style="font-size:12px;">
              <a  class="nav-link active" href='{{url('dokter/index')}}'>Darshboard</a>
            </li>

          <li class="nav-item"  style="font-size:12px;">
            <a style="color:white;" class="nav-link" href='{{url('dokter/visitor')}}'>Visitor Data</a>
          </li>

        </ul>
        </nav>

        <div id="content-wrapper">
        <div class="container">
          @include('sweet::alert')
          <div class="wrapper">
              <div class="container" style="height:100%">
                  <article class="part card-details">

                      <h1>
                          Detail Doctor
                      </h1>
                      <form method="POST" enctype="multipart/form-data" >
                        <hr>
                          <div class="group card-name">
                          <p style="color:white"><i class="	fas fa-id-card-alt">&nbsp;&nbsp;NIP : &nbsp;{{ Session::get('nip') }}</i></p>
                          <p style="color:white"><i class="	fas fa-user-md">&nbsp;&nbsp;Name : &nbsp;{{ Session::get('name_dokter') }}</i></p>
                          <p style="color:white"><i class="	fas fa-stethoscope">&nbsp;&nbsp;Specialist : &nbsp;{{ Session::get('specialist') }}</i></p>



                          </div>
                            <div class="group card-name">


                            </div>
                            @if($data->status_dokter=='ada')<button type="button" data-status="{{$data->status_dokter}}" data-visitid="{{$data->id}}" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editstatus" name="button"><i class="fas fa-check"></i> Avaible</button>
                                @else ($data->status_dokter=='tidak ada')<button type="button" data-status="{{$data->status_dokter}}" data-visit="{{$data->id}}" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#editstatus" name="button"><i class="fas fa-times"></i> Not Avaible </button>@endif




                      </form>
                  </article>
                  <div class="part bg" >
                    <img src="{{asset('storage/'.Session::get('avatar') )}}" alt="" style="width:100%; height:100%;">
                  </div>
              </div>
          </div>
          </div>

      </div>
        </div>
        </div>
        </div>


        <!--modal--->
        <div class="modal fade " id="editstatus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog" role="document" >
          <div class="modal-content"style="background-color:lightblue;">
            <div class="modal-header" style="background-color:grey;">

            <h3 style="color:white; align:center;">Update Status</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="" action="/{{$data->id}}/updatestatus" method="post">
                {{method_field("")}}
              @csrf
              <input type="hidden" name="id" id="id" value="">
                <label for="jam" style="color:white; font-size:20px; text-align:center;" >{{'Status'}}</label><hr>
              <select class="form-control" name="status_dokter" id="status">
                <option value="ada">Avaible</option>
                <option value="tidak ada">Not Avaible</option>
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
      var status_dokter = button.data('status_dokter')
      var id = button.data('visitid')
      var id = button.data('visit')
      // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)
      modal.find('.modal-body #status_dokter').val(status)
      modal.find('.modal-body #id').val(id)
      })

      </script>


  </body>
</html>
