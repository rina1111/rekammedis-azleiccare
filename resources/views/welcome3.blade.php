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
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">

<!-- Home Panel  -->
<div class="container-fluid"style="background-image:url(https://dokter-kita.com/wp-content/uploads/2018/09/Health-Wallpaperslarge-health-wallpapers-1920x1200-for-desktop-PIC-WPHR2686.jpg)">
  <div class="panel" id="home">

  </div>


  <div class="panel" id="doctor">
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
                <a href="#back"class="btn btn-dark" >Back</a>

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
      </div>

<!-----Receptionist---->

  <div class="panel" id="Receptionist">
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
            <button class="ctaku"><i class="fas fa-chevron-down fa-1x"></i></button>
            <div class="text">
              <h1>Login As Medical Receptionist </h1>
              <hr>
              <br>
              <form action="{{ url('frontoffice/login') }}" method="post">
                                  {{ csrf_field() }}
                                  <div class="form-group">
                                      <label>Username</label>
                                      <input class="form-control" type="text" name="username_front" placeholder="Username">
                                  </div>
                                  <div class="form-group">
                                      <label>Password</label>
                                      <input class="form-control" type="password" name="password" placeholder="Password">
                                  </div>

                                  <button class="btn btn-secondary" type="submit">sign in</button>
                              </form>
            </div>
          </div>
          <div class="call-text"style="background-image:url(https://shared.spokane.edu/ccsglobal/media/Global/Area%20of%20Study%20855x500/SCC/medicalReceptionist_P.jpg?ext=.jpg)">
            <a href="#back"class="btn btn-dark" >Back</a>

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

        .ctaku {
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
              color: #x 696a86;

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
        var ctaku = document.querySelector(".ctaku");
        var check = 0;

        ctaku.addEventListener('click', function(e){
          var text = e.target.nextElementSibling;
          var loginText = e.target.parentElement;
          text.classList.toggle('show-hide');
          loginText.classList.toggle('expand');
          if(check == 0)
          {
              ctaku.innerHTML = "<i class=\"fas fa-chevron-up\"></i>";
              check++;
          }
          else
          {
              ctaku.innerHTML = "<i class=\"fas fa-chevron-down\"></i>";
              check = 0;
          }
        })
        </script>
    </div>
  </div>


  <!---pharmachy---->
  <div class="panel" id="apoteker">
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
            <button class="ctaku2"><i class="fas fa-chevron-down fa-1x"></i></button>
            <div class="text">
              <h1>Login As Pharmacist </h1>
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
          <div class="call-text"style="background-image:url(https://mk0pharmapodhqfi2xh4.kinstacdn.com/wp-content/uploads/2018/10/Pharmacist.jpg)">
            <a href="#back"class="btn btn-dark" >Back</a>

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

        .ctaku2 {
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
        var ctaku2 = document.querySelector(".ctaku2");
        var check = 0;

        ctaku2.addEventListener('click', function(e){
          var text = e.target.nextElementSibling;
          var loginText = e.target.parentElement;
          text.classList.toggle('show-hide');
          loginText.classList.toggle('expand');
          if(check == 0)
          {
              ctaku2.innerHTML = "<i class=\"fas fa-chevron-up\"></i>";
              check++;
          }
          else
          {
              ctaku2.innerHTML = "<i class=\"fas fa-chevron-down\"></i>";
              check = 0;
          }
        })
        </script>
    </div>
  </div>
<!-------->
<div class="panel" id="kasir">
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
          <button class="ctaku3"><i class="fas fa-chevron-down fa-1x"></i></button>
          <div class="text">
            <h1>Login As Cashier </h1>
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
        <div class="call-text"style="background-image:url(http://bbcpersian7.com/images/clerk-definition-25.jpg)">
          <a href="#back"class="btn btn-dark" >Back</a>
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

      .ctaku3 {
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
      var ctaku3 = document.querySelector(".ctaku3");
      var check = 0;

      ctaku3.addEventListener('click', function(e){
        var text = e.target.nextElementSibling;
        var loginText = e.target.parentElement;
        text.classList.toggle('show-hide');
        loginText.classList.toggle('expand');
        if(check == 0)
        {
            ctaku3.innerHTML = "<i class=\"fas fa-chevron-up\"></i>";
            check++;
        }
        else
        {
            ctaku3.innerHTML = "<i class=\"fas fa-chevron-down\"></i>";
            check = 0;
        }
      })
      </script>
  </div>
</div>

<div class="panel" id="admin">
  <div class='login'>
  <h2 class="ku" style="text-align:center"> Admin Login</h2>
  <form class="" action="{{ route('login') }}" method="post">
    @csrf
    <input name='username' class="form-control" placeholder='Username' type='text'>
    <input id='pw' name='password' class="form-control" placeholder='Password' type='password'>
    <br><br>
    <input class='animated' type='submit' value='Login' style:"background-color:lightblue;">
    <a href="#home" class="btn btn-secondary">Back</a>
  </form>

</div>
</div>
<style media="screen">
* {
margin: 0;
padding: 0;
}



.ku {
color: #6D7781;
font-family: "Sofia", cursive;
font-size: 15px;
font-weight: bold;
font-size: 3.6em;
text-align: center;
margin-bottom: 20px;
}

a {
color: #435160;
text-decoration: none;
}

.login {
width: 350px;
position: absolute;
top: 10%;
left: 50%;
margin-left: -175px;
}

input[type="text"], input[type="password"] {
width: 350px;
padding: 20px 0px;
background: transparent;
border: 0;
border-bottom: 1px solid #435160;
outline: none;
color: #6D7781;
font-size: 16px;
}



#agree:checked ~ label[for=agree] {
background: #435160;
}

input[type="submit"] {
background: lightblue;
border: 0;
width: 350px;
height: 40px;
border-radius: 3px;
color: #fff;
font-size: 12px;
cursor: pointer;
transition: background 0.3s ease-in-out;
}
input[type="submit"]:hover {
background: grey;
animation-name: shake;
}

.forgot {
margin-top: 30px;
display: block;
font-size: 11px;
text-align: center;
font-weight: bold;
}
.forgot:hover {
margin-top: 30px;
display: block;
font-size: 11px;
text-align: center;
font-weight: bold;
color: #6D7781;
}



::-webkit-input-placeholder {
color: #435160;
font-size: 12px;
}

.animated {
animation-fill-mode: both;
animation-duration: 1s;
}

@keyframes shake {
0%, 100% {
  transform: translateX(0);
}
10%, 30%, 50%, 70%, 90% {
  transform: translateX(-10px);
}
20%, 40%, 60%, 80% {
  transform: translateX(10px);
}
}
</style>
  <!-- Navigation -->
  <div class="menu">
    <a class="menu__link" href="#doctor" data-hover="Doctor">Doctor</a>
    <a class="menu__link" href="#Receptionist" data-hover="Receptionist">Receptionist</a>
      <a class="menu__link" href="#apoteker" data-hover="Pharmacist">Pharmacist</a>
        <a class="menu__link" href="#kasir" data-hover="Cashier">Cashier</a>
          <a class="menu__link" href="#admin" data-hover="Admin">Admin</a>
  </div>

</div>

<style media="screen">
/* basic style definition */
/* •••••••••••••••••••••••••••••••• */
body {
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
font-family: 'Roboto Slab', serif;
}
h1 {
margin: 0;
-webkit-user-select: none;
   -moz-user-select: none;
    -ms-user-select: none;
        user-select: none;
text-align: center;
font-weight: 300;
}
p {
font-weight: 300;
color: #546E7A;
-webkit-user-select: none;
   -moz-user-select: none;
    -ms-user-select: none;
        user-select: none;
text-align: center;
margin: 0;
}
a {
text-align: center;
text-decoration: none;
color: #FFF;
}
/* Navigation menu */
/* •••••••••••••••••••••••••••••••• */
.menu {
position: fixed;
width: 100vw;
pointer-events: none;
margin-top: 10vh;
text-align: center;
z-index: 2;
}
/* Menu link item */
.menu__link {
display: inline-block;
text-decoration: none;
border: 2px solid #263238;
color: #263238;
pointer-events: auto;
line-height: 40px;
position: relative;
padding: 0 50px;
box-sizing: border-box;
margin: 0;
-webkit-user-select: none;
   -moz-user-select: none;
    -ms-user-select: none;
        user-select: none;
overflow: hidden;
border-radius: 50px;
}
.menu__link::before {
content: attr(data-hover);
background-color: #263238;
color: #FFF;
position: absolute;
top: 100%;
bottom: 0;
left: 0;
transition: all 300ms cubic-bezier(0.19, 1, 0.56, 1);
right: 0;
}
.menu__link:hover::before {
top: 0;
}
/* Panels Style*/
/* •••••••••••••••••••••••••••••••• */
/* Common panel style */
.panel {
display: flex;
align-items: center;
justify-content: center;
flex-direction: column;
position: absolute;
top: 0;
bottom: 0;
left: 0;
right: 0;
overflow: auto;
z-index: 999;
color: #000;
box-sizing: border-box;
background-color: #ECEFF1;
}
/* panel content (only for animation delay after open) */
.panel__content {
opacity: 0;
will-change: margin-top;
transition: all 700ms;
transition-delay: 600ms;

margin-top: -5%;
}
/* Panel content animation after open */
.panel:target .panel__content {
opacity: 1;
margin-top: 0;
}
/*  Specific "Home "panel */
/* •••••••••••••••••••••••••••••••• */
.panel#home {
z-index: 1;
background: radial-gradient(ellipse at center, #ffffff 0%, #CFD8DC 100%);
}
/*  Specific panel "Slice" */
/* •••••••••••••••••••••••••••••••• */
.panel#slice {

transition: all 800ms cubic-bezier(0.19, 1, 0.56, 1);
-webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
}
.panel#slice:target {
-webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
}
.panel#doctor {

transition: all 800ms cubic-bezier(0.19, 1, 0.56, 1);
-webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
}
.panel#doctor:target {
-webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
}
.panel#Receptionist {

transition: all 800ms cubic-bezier(0.19, 1, 0.56, 1);
-webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
}
.panel#Receptionist:target {
-webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
}

.panel#apoteker {

transition: all 800ms cubic-bezier(0.19, 1, 0.56, 1);
-webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
}
.panel#apoteker:target {
-webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
}
.panel#kasir {

transition: all 800ms cubic-bezier(0.19, 1, 0.56, 1);
-webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
}
.panel#kasir:target {
-webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
}
/*  Specific panel "Fade" effect */
/* •••••••••••••••••••••••••••••••• */
.panel#admin {
background-color: black;
opacity: 0;
transition: all 800ms;
pointer-events: none;
}
.panel#admin:target {
opacity: 1;
pointer-events: auto;
}
</style>
</body>
</html>
