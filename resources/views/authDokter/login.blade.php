
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
  <body style="background-color:grey;" >
<div class="container-fluid" style="background-image:url(https://www.ecampusnews.com/files/2016/07/healthcare.jpg);opacity:1; ">


                @if(\Session::has('alert'))
                          <div class="alert alert-danger">
                              <div>{{ Session::get('alert') }}</div>
                          </div>
                      @endif
                      @if(\Session::has('alert-success'))
                          <div class="alert alert-success">
                              <div>{{ Session::get('alert-success') }}</div>
                          </div>
                      @endif
    <div class="wrapper">
      <div class="login-text" >
        <button class="cta"><i class="fas fa-chevron-down fa-1x"></i></button>
        <div class="text">
          <h1>Login As Doctor </h1>
          <hr>
          <br>
          <form action="{{ url('dokter/login') }}" method="post">
                              {{ csrf_field() }}
                              <div class="form-group">
                                  <label>Username</label>
                                  <input class="form-control" type="text" name="username" placeholder="Username">
                              </div>
                              <div class="form-group">
                                  <label>Password</label>
                                  <input class="form-control" type="password" name="password" placeholder="Password">
                              </div>

                              <button class="btn btn-secondary" type="submit">sign in</button>
                          </form>
        </div>
      </div>
      <div class="call-text"style="background-image:url(https://cdn.painfreelivinglife.com/2013/04/PFL020118.jpg)">
        <a href="{{url('welcome')}}"class="btn btn-dark" >Back</a>

      </div>

    </div>
    <style media="screen">
    body {
      font-family: 'Raleway', sans-serif;
      background-color: #e7e7e7;
    }
    .wrapper {
      width: 800px;
      height: 600px;
      position: relative;
      margin: 3% auto;
      box-shadow: 2px 18px 70px 0px #9D9D9D;
      overflow: hidden;
    }

    .login-text {
      width: 800px;
      height:450px;
      background: linear-gradient(to left, grey, lightblue);
      position: absolute;
      top: -300px;
      box-sizing: border-box;
      padding: 6%;
      transition: all 0.5s ease-in-out;
      z-index: 11;
    }

    .text {
      margin-left: 20px;
      color: #fff;
      display: none;
      transition: all 0.5s ease-in-out;
      transition-delay: 0.3s;

      a, a:visited {
          font-size: 36px;
          color: #fff;
          text-decoration: none;
          font-weight: bold;
          display: block;
      }

      hr {
          width: 10%;
          float: left;
          background-color: #fff;
          font-size: 16px;
      }

      input {
          margin-top: 30px;
          height: 40px;
          width: 300px;
          border-radius: 2px;
          border: none;
          background-color: #444;
          opacity: 0.6;
          outline: none;
          color: #fff;
          padding-left: 10px;
      }

      input[type=text] {
          margin-top: 60px;
      }

      button {
          margin-top: 60px;
          height: 40px;
          width: 140px;
          outline: none;
      }

      .login-btn {
          background: #fff;
          border: none;
          border-radius: 2px;
          color: #696a86;
      }

    }

    .cta {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background: #696a86;
      border: 2px solid #fff;
      position: absolute;
      bottom: -30px;
      left: 370px;
      color: #fff;
      outline: none;
      cursor: pointer;
      z-index: 11;
    }

    .call-text {
      background-color: #fff;
      width: 800px;
      height: 450px;
      position: absolute;
      bottom: 0;
      padding: 10%;
      box-sizing: border-box;
      text-align: center;

      h1 {
          font-size: 42px;
          margin-top: 10%;
          color: #696a86;

          span {
              color: #333;
              font-weight: bolder;

          }
      }

      button {
          height: 40px;
          width: 180px;
          border: none;
          border-radius: 20px;
          background: linear-gradient(to left, #ab68ca, #de67a3);
          color: #fff;
          font-weight: bolder;
          margin-top: 30px;
          cursor: pointer;
          outline: none;
      }
    }

    .show-hide {
      display: block;
    }

    .expand {
      transform: translateY(300px);
    }

    </style>

    <script type="text/javascript">
    var cta = document.querySelector(".cta");
    var check = 0;

    cta.addEventListener('click', function(e){
      var text = e.target.nextElementSibling;
      var loginText = e.target.parentElement;
      text.classList.toggle('show-hide');
      loginText.classList.toggle('expand');
      if(check == 0)
      {
          cta.innerHTML = "<i class=\"fas fa-chevron-up\"></i>";
          check++;
      }
      else
      {
          cta.innerHTML = "<i class=\"fas fa-chevron-down\"></i>";
          check = 0;
      }
    })
    </script>
</div>
  </body>
</html>
