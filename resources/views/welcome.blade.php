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
    <link rel="stylesheet" href="{{asset('css/card.css')}}">
  </head>
  <body style="background-color:#203e4a;" >
@if(session('sukses'))
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Terimakasih!</h4>
  <p>{{session('login')}}</p>
  <hr>
</div>
@endif


<div class="container-fluid" style="background-image:url(https://dokter-kita.com/wp-content/uploads/2018/09/Health-Wallpaperslarge-health-wallpapers-1920x1200-for-desktop-PIC-WPHR2686.jpg)"></div>
<div class="modal">
  <div class="modal-container" style="background-color:#203e4a;">
    <div class="modal-left">
      <h1 class="modal-title">Welcome!</h1>
    <p>Are you a Doctor? Please Login <a href='{{url('authDokter/login')}}' style="color:lightblue;">here</a> </p>
      <p class="modal-desc"></p>
       <form method="POST" action="{{ route('login') }}">
         @csrf
      <div class="input-block">
        <label for="email" class="input-label">Username</label>
       <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}">

       @if ($errors->has('username'))
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('username') }}</strong>
                     </span>
                 @endif
      </div>
      <div class="input-block">
        <label for="password" class="input-label">Password</label>
        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}">
        @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
      </div>

      <div class="modal-buttons">


    


        <button class="input-button" style="background-color:#203e4a;">Login</button>
      </div>
    </div>
  </form>
    <div class="modal-right">
      <img src="{{asset('image/7.jpg')}}" alt="">
    </div>
    <button class="icon-button close-button">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
    <path d="M 25 3 C 12.86158 3 3 12.86158 3 25 C 3 37.13842 12.86158 47 25 47 C 37.13842 47 47 37.13842 47 25 C 47 12.86158 37.13842 3 25 3 z M 25 5 C 36.05754 5 45 13.94246 45 25 C 45 36.05754 36.05754 45 25 45 C 13.94246 45 5 36.05754 5 25 C 5 13.94246 13.94246 5 25 5 z M 16.990234 15.990234 A 1.0001 1.0001 0 0 0 16.292969 17.707031 L 23.585938 25 L 16.292969 32.292969 A 1.0001 1.0001 0 1 0 17.707031 33.707031 L 25 26.414062 L 32.292969 33.707031 A 1.0001 1.0001 0 1 0 33.707031 32.292969 L 26.414062 25 L 33.707031 17.707031 A 1.0001 1.0001 0 0 0 32.980469 15.990234 A 1.0001 1.0001 0 0 0 32.292969 16.292969 L 25 23.585938 L 17.707031 16.292969 A 1.0001 1.0001 0 0 0 16.990234 15.990234 z"></path>
</svg>
      </button>
  </div>
  <button class="modal-button" >Click here to login</button>
</div>
  </body>
  <script type="text/javascript" >
  const body = document.querySelector("body");
  const modal = document.querySelector(".modal");
  const modalButton = document.querySelector(".modal-button");
  const closeButton = document.querySelector(".close-button");
  const scrollDown = document.querySelector(".scroll-down");
  let isOpened = false;

  const openModal = () => {
    modal.classList.add("is-open");
    body.style.overflow = "hidden";
  };

  const closeModal = () => {
    modal.classList.remove("is-open");
    body.style.overflow = "initial";
  };

  window.addEventListener("scroll", () => {
    if (window.scrollY > window.innerHeight / 3 && !isOpened) {
      isOpened = true;
      scrollDown.style.display = "none";
      openModal();
    }
  });

  modalButton.addEventListener("click", openModal);
  closeButton.addEventListener("click", closeModal);

  document.onkeydown = evt => {
    evt = evt || window.event;
    evt.keyCode === 27 ? closeModal() : false;
  };
  </script>
</html>
