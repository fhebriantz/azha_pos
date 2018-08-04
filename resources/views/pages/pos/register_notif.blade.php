<!DOCTYPE html>
<html>
  <head>
    <title>Azhapos - Index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css?v=0.012')}}"/>  
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

    <div class="main-signup" >
    	<div class="tittle-register">
	    	<h2 style="color: #eee" class="size-titlesignup">Selamat datang di Azhapos</h2>
	 		<p class="size-signup" style="color: #aaa;">Terima kasih telah mendaftar di Azhapos. Cukup verifikasi alamat email Anda dan Anda sudah siap untuk mengatur outlet Anda sendiri.</p>
    	</div>
    	<div class="content-register">
	    	<h2 style="color: #eee"  class="size-titlesignup">Verifikasi Akun Anda</h2>
	 		<p  class="size-signup" style="color: #aaa;">Cek {{session()->get('email')}} dan klik tautan yang kami kirimkan kepada Anda.</p>
	 		<p style="color: #aaa;" class="size-resend">Haven't received our email? <a href="#" style="color: #accef3">Resend email.</a></p>
    	</div>
    </div>
    <!-- <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <button class="btn invisible" id="backButton">< Back</button> -->
  </body>
  <script src="{{ asset('js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('js/jquery.min.js')}}"></script>
</html>