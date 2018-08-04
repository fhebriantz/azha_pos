<!DOCTYPE html>
<html>
  <head>
    <title>Azhapos - Index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css?v=0.007')}}"/>  
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
  </head>

  <body style="background-color: #535353">
    <div class="image-bg">
      <img src="{{ asset('image/image-bg.png')}}">
    </div>
    <div class="sidenav-login mobilehide">
      <div class="container-login">
        <a href="{{url('/index')}}"><img src="{{ asset('image/logo2.png')}}" class="logo-login"></a>
        <a class="sub-menu-login matop-nav1 mabot-nav-1" href="#"><strong>AZHAPOS</strong></a>
        <div class="garis"></div>
        <div class="desc-azha">
          Azha pos merupakan sebuah sistem kasir yang pintar dengan menggunakan Azhapos anda akan menghemat waktu Anda untuk lebih ke fokus mengembangkan bisnis Anda. Bergabunglah dengan ribuan pebisnis Indonesia yang menggunakn Azhapos untuk memaksimalkan profit dan produktivitas bisnis Anda.
        </div>
        <div class="copyright">
          Copyright 2018 <br>
          PT. Azha Teknologi Pratama
        </div>
      </div>
    </div>
    <section class="mobileshow createakun">
      <div class="main-login">
        <div><a href="{{url('/index')}}"><img src="{{ asset('image/logo1.png')}}" class="logo-login1" alt=""></a></div>

      </div>
      
    </section>

    <div class="main-login" >
        <div class="title-login">
          <strong>
            Buat akun Azhapos 
            <br>sekarang dan nikmati  
            <br>kebebasan mengelola 
            <br>bisnis Anda dari mana saja
          </strong>
        </div>
        <div class="col-sm-12" style="margin-left: -12px; margin-top: 50px;">
          <div class="row">
            <form class="form-horizontal" method="POST" action="{{ url('/login')}}">
            {{ csrf_field() }}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="col-md-10 col-sm-12 padding-right  checkbx" style="color: #aaa">
                <div class="form-group" >
                    <label>Username</label>
                    <input type="text"  class="form-control" name="username" value="{{ old('username') }}" placeholder="Username">
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-12" >
                        <label>Password</label>
                        <input  type="password" name="password" class="form-control" style="width: 100%">
                        <p style="padding-top: 10px; color: #d71635"><strong>{{session()->get('message')}}</strong></p>
                    </div>
                  </div>
                </div>
              <input type="checkbox"name="vehicle"> I have read the Privacy Policy and agree to the Terms of Service<br>
              <input  class="add-data-login btn btn-light" type="submit" name="login" value="LOG IN"/>
            </div>
          </form>
          </div>
        </div>

        
    </div>.
    <!-- <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <button class="btn invisible" id="backButton">< Back</button> -->
  </body>
  <script src="{{ asset('js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('js/jquery.min.js')}}"></script>
</html>