    <div class="topnav mobileshow" id="myTopnav">
      <a href="{{url('/barang')}}" class="actived"><img class="mobi-logo" src="{{ asset('image/logo1.png')}}" alt=""></a>
      <div class="dropdown">
        <button class="dropbtn">Master 
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a class="" href="{{url('/barang')}}">Barang (Stok)</a>
          <a class="" href="{{url('/kategori')}}">Kategori</a>
          <a class="" href="{{url('/outlet')}}">Outlet</a>
          <a class="" href="{{url('/pelanggan')}}">Pelanggan</a>
          <a class="" href="{{url('/pegawai')}}">Pegawai</a>
          <a class="" href="{{url('/pembelian')}}">Transaksi</a>
        </div>
      </div> 
      <a href="{{url('/master')}}">Buat Data</a>
      <a href="#">Laporan Penjualan</a>
      <a href="#">Laporan Stock Barang</a>
      <a href="#">Akun Saya</a>
      <a href="{{url('/user_management')}}">Manajemen Pengguna</a>
      <a href="{{url('/user_group')}}">Manajemen Grup</a>
      <a href="#">Bantuan</a>
      <a href="{{url('/logout')}}">Keluar</a>
      <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>

    <!-- nav MOBIle -->
    <div class="sidenav mobilehide">
      <div class="container-sidebar">
        <a href="{{url('/barang')}}"><img src="{{ asset('image/logo2.png')}}" class="logo-dashboard"></a>
        <a class="sub-menu matop-nav1 mabot-nav-1" href="{{url('/dashboard')}}"><strong>DASHBOARD</strong></a>
        <strong class="sub-menu">MASTER</strong>
          <a class="link" href="{{url('/barang')}}">Barang (Stok)</a>
          <a class="link" href="{{url('/kategori')}}">Kategori</a>
          <a class="link" href="{{url('/outlet')}}">Outlet</a>
          <a class="link" href="{{url('/pelanggan')}}">Pelanggan</a>
          <a class="link" href="{{url('/pegawai')}}">Pegawai</a>
          <a class="link mabot-nav-1" href="{{url('/pembelian')}}">Transaksi</a>
        <a class="sub-menu mabot-nav-1" href="#"><strong>LAPORAN PENJUALAN</strong></a>
        <a class="sub-menu mabot-nav-1" href="#"><strong>LAPORAN STOK BARANG</strong></a>
        <a href="{{url('/master')}}" class="btn mabot-nav-1 btn-create" style="background-color: white;">Buat Data</a>
          <a class="link matop-nav1" href="#account">Akun Saya</a>
          <a class="link" href="{{url('/user_management')}}">Manajemen Pengguna</a>
          <a class="link" href="{{url('/user_group')}}">Manajemen Grup</a>
          <a class="link" href="#support">Bantuan</a>
          <a class="link" href="{{url('/logout')}}">Keluar</a>
        </div>
    </div>