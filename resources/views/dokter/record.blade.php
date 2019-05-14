@extends ('dokter.layouts')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
        <a style="color:white;" href="">Darshboard</a>
      </li>

    <li class="nav-item"  style="font-size:12px;">
      <a  class="nav-link active" href=''>Visitor Data</a>
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
      <div class="card" style="width:50rem; border-radius:25px;border-style:double; border-color:lightblue;" >
        <div  id="container">
          <br>
          <h1>&bull; Medical Record &bull;</h1>
          <div class="underline">
          </div>
          <div class="icon_wrapper">
            <img  class="icon" src="{{asset('image/azleic.png')}}" alt="">
          </div>
            @foreach($visit as $visit)
          <form action="#" method="post" id="contact_form">
            <div class="name">
              <label for="name"></label>
              <input type="text" placeholder="My name is" name="name" id="name_input" value="Name : {{$visit->name}}" readonly>
            </div>
            <div class="email">
              <label for="email"></label>
              <input type="email" placeholder="My e-mail is" name="email" id="email_input" value="Age : {{$visit->age}}"  readonly>
            </div>
            <div class="name">
              <label for="name"></label>
              <input type="text" placeholder="My name is" name="name" id="name_input" value="Gender : {{$visit->gender}}" readonly>
            </div>
            <div class="email">
              <label for="email"></label>
              <input type="email" placeholder="My e-mail is" name="email" id="email_input" value="Address: {{$visit->address}}"  readonly>
            </div>
            <div class="name">
              <label for="name"></label>
              <input type="text" placeholder="My name is" name="name" id="name_input" value="Phone : {{$visit->hp}}" readonly>
            </div>
            <div class="email">
              <label for="email"></label>
              <input type="email" placeholder="My e-mail is" name="email" id="email_input" value="BPJS: {{$visit->bpjs}}"  readonly>
            </div>
            <div class="name">
              <label for="name"></label>
              <input type="text" placeholder="My name is" name="name" id="name_input" value="Doctor : {{$visit->name_dokter}}" readonly>
            </div>
            <div class="email">
              <label for="email"></label>
              <input type="email" placeholder="My e-mail is" name="email" id="email_input" value="Specialist : {{$visit->specialist}}"  readonly>
            </div>
          </form>
          @endforeach
          <br>
          <br>

          <form action="/medical/create" method="post" id="contact_form">
            @csrf
            <div class="telephone">
                <label for="message" style="font-size:18px; font-family:times new rowman;">Visitor ID</label>
              <input type="text" name="id_visitor" type="text" value=" {{$visitor->id}}" readonly>
            </div>

            <div class="message">
              <label for="message" style="font-size:18px; font-family:times new rowman;">Complaints</label>
              <textarea name="keluhan" placeholder="" id="message_input" cols="30" rows="5" required></textarea>
            </div>
            <div class="form-group">
              <label for="message" style="font-size:18px; font-family:times new rowman;">Diagnosis</label>
             <input type="text" name="diagnosa" id="diagnosa" class="form-control input-lg" placeholder="Your Diagnosis " />
             <div id="diagnosalist">
             </div>
            </div>
            {{ csrf_field() }}
            <label for="message" style="font-size:18px; font-family:times new rowman;">Doctor Advice</label>
            <div class="message">
              <label for="message"></label>
              <textarea name="saran" placeholder="" id="message_input" cols="30" rows="5" required></textarea>
            </div>
            <div class="telephone">
                <label for="message" style="font-size:18px; font-family:times new rowman;">Fee</label>
              <input type="text" placeholder="" name="fee" id="telephone_input" required>
            </div>
            <div class="submit">
              <input type="submit" value="Save" id="form_button" />
            </div>
          </form>
          <!-- // End form -->
        </div><!-- // End #container -->
      </div>


      <style media="screen">
      @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);


button {
overflow: visible;
}

button, select {
text-transform: none;
}

button, input, select, textarea {
color: #5A5A5A;
font: inherit;
margin: 0;
}

input {
line-height: normal;
}

textarea {
overflow: auto;
}

#container {
border: solid 3px lightblue;
width:45rem;
margin: 60px auto;
position: relative;
}

form {
padding: 35px;
margin: 10px 0;
}

h1 {
color: #474544;
font-size: 32px;
font-weight: 700;
letter-spacing: 7px;
text-align: center;
font-family: times rowman;
text-transform: uppercase;

}

.underline {
border-bottom: solid 2px #474544;
margin: -0.512em auto;
width: 80px;
}

.icon_wrapper {
margin: 50px auto 0;
width: 100%;
}

.icon {
display: block;
fill: #474544;
height: 200px;
margin: 0 auto;
width: 200px;
}

.email {
float: right;
width: 45%;
}

input[type='text'], [type='email'], select, textarea {
background: none;
border: none;
border-bottom: solid 2px #474544;
color: #474544;
font-size: 14px;
font-family: Times New Rowman;
font-weight: 400;
letter-spacing: 1px;
margin: 0em 0 1.875em 0;
padding: 0 0 0.85em 0;
text-transform: uppercase;
width: 100%;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
-ms-box-sizing: border-box;
-o-box-sizing: border-box;
box-sizing: border-box;
-webkit-transition: all 0.3s;
-moz-transition: all 0.3s;
-ms-transition: all 0.3s;
-o-transition: all 0.3s;
transition: all 0.3s;
}

input[type='text']:focus, [type='email']:focus, textarea:focus {
outline: none;
padding: 0 0 0.875em 0;
}

.message {
float: none;
}

.name {
float: left;
width: 45%;
}

select {
background: url('https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-ios7-arrow-down-32.png') no-repeat right;
outline: none;
-moz-appearance: none;
-webkit-appearance: none;
}

select::-ms-expand {
display: none;
}



.telephone {
width: 100%;
}

textarea {
line-height: 150%;
height: 150px;
resize: none;
width: 100%;
}

::-webkit-input-placeholder {
color: #474544;
}

:-moz-placeholder {
color: #474544;
opacity: 1;
}

::-moz-placeholder {
color: #474544;
opacity: 1;
}

:-ms-input-placeholder {
color: #474544;
}

#form_button {
background: none;
border: solid 2px #474544;
color: #474544;
cursor: pointer;
display: inline-block;
font-family: 'Helvetica', Arial, sans-serif;
font-size: 0.875em;
font-weight: bold;
outline: none;
padding: 20px 35px;
text-transform: uppercase;
-webkit-transition: all 0.3s;
-moz-transition: all 0.3s;
-ms-transition: all 0.3s;
-o-transition: all 0.3s;
transition: all 0.3s;
}

#form_button:hover {
background: #474544;
color: #F2F3EB;
}

@media screen and (max-width: 768px) {
#container {
  margin: 20px auto;
  width: 95%;
}
}

@media screen and (max-width: 480px) {
h1 {
  font-size: 26px;
}

.underline {
  width: 68px;
}

#form_button {
  padding: 15px 25px;
}
}

@media screen and (max-width: 420px) {
h1 {
  font-size: 18px;
}

.icon {
  height: 35px;
  width: 35px;
}

.underline {
  width: 53px;
}

input[type='text'], [type='email'], select, textarea {
  font-size: 14px;
}
}
      </style>
      <script type="text/javascript">
      $(document).ready(function(){

       $('#diagnosa').keyup(function(){
              var query = $(this).val();
              if(query != '')
              {
               var _token = $('input[name="_token"]').val();
               $.ajax({
                url:"{{ route('diagnosa.fetch') }}",
                method:"POST",
                data:{query:query, _token:_token},
                success:function(data){
                 $('#diagnosalist').fadeIn();
                          $('#diagnosalist').html(data);
                }
               });
              }
          });

          $(document).on('click', 'li', function(){
              $('#diagnosa').val($(this).text());
              $('#diagnosalist').fadeOut();
          });

      });
      </script>
  </body>
<script type="text/javascript">
  $('.dropdown-toggle').dropdown()
</script>
</html>
@endsection
