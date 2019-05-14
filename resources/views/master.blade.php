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
  <body style="background-image:url(https://dokter-kita.com/wp-content/uploads/2018/09/Health-Wallpaperslarge-health-wallpapers-1920x1200-for-desktop-PIC-WPHR2686.jpg)">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">

    <div class="panels">
      <div class="panel panel1">
        <p>Hey</p>
        <p>Let's</p>
        <p>Dance</p>
      </div>
      <div class="panel panel2">
        <p>Give</p>
        <p>Take</p>
        <p>Receive</p>
      </div>
      <div class="panel panel3">
        <p>Experience</p>
        <p>It</p>
        <p>Today</p>
      </div>
      <div class="panel panel4">
        <p>Give</p>
        <p>All</p>
        <p>You can</p>
      </div>
      <div class="panel panel5">
        <p>Life</p>
        <p>In</p>
        <p>Motion</p>
      </div>
    </div>

    <style media="screen">
            html {
        box-sizing: border-box;
        background: #ffc600;
        font-family: 'Varela Round', sans-serif;
        font-size: 20px;
        font-weight: 400;
        }

        body {
        margin: 0;
        }

        *,
        *:before,
        *:after {
        box-sizing: inherit;
        }

        .panels {
        min-height: 100vh;
        overflow: hidden;
        display: flex;
        }

        .panel {
        background: #6b0f9c;
        color: #000;
        text-align: center;
        align-items: center;

        transition:
          font-size 0.7s cubic-bezier(0.61,-0.19, 0.7,-0.11),
          flex 0.7s cubic-bezier(0.61,-0.19, 0.7,-0.11),
          background 0.2s;
        font-size: 20px;
        background-size: cover;
        background-position: center;
        flex: 1;
        justify-content: center;
        display: flex;
        flex-direction: column;
        }

        .panel1 {
        background: #ebd777;
        }

        .panel2 {
        background: #aece82;
        }

        .panel3 {
        background: #75c489;
        }

        .panel4 {
        background: #42bb92;
        }

        .panel5 {
        background: #12b79c;
        }

        .panel > * {
        margin: 0;
        width: 100%;
        transition: transform 0.5s;
        flex: 1 0 auto;
        display: flex;
        justify-content: center;
        align-items: center;
        }

        .panel > *:first-child {
        transform: translateY(-100%);
        }

        .panel.open-active > *:first-child {
        transform: translateY(0);
        }

        .panel > *:last-child {
        transform: translateY(100%);
        }

        .panel.open-active > *:last-child {
        transform: translateY(0);
        }

        .panel p {
        font-size: 0.8em;
        opacity: 0.3;
        }

        .panel p:nth-child(2) {
        font-size: 2.5em;
        }

        .panel.open {
        flex: 5;
        font-size: 40px;
        }
    </style>
  <script type="text/javascript">
  const panels = document.querySelectorAll('.panel');

function toggleOpen() {
this.classList.toggle('open');
}

function toggleActive(e) {
console.log(e.propertyName);
if(e.propertyName.includes('flex')) {
 this.classList.toggle('open-active');
}
}

panels.forEach(panel => panel.addEventListener('click', toggleOpen));
panels.forEach(panel => panel.addEventListener('transitionend', toggleActive));
  </script>
  </body>
</html>
