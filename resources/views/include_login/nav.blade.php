    <div class="topnav mobileshow" id="myTopnav">
      <a href="{{url('/index')}}" class="actived"><img class="mobi-logo" src="{{ asset('image/logo1.png')}}" alt=""></a>
      <div class="dropdown">
        <button class="dropbtn">Master 
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a class="" href="{{url('/list_pelanggan')}}">Pelanggan</a>
          <a class="" href="{{url('/list_produk')}}">Produk</a>
          <a class="" href="{{url('/list_kategori')}}">Kategori</a>
          <a class="" href="{{url('/list_barang')}}">Barang (Stok)</a>
          <a class="" href="{{url('/list_outlet')}}">Outlet</a>
          <a class="" href="{{url('/list_pegawai')}}">Pegawai</a>
          <a class="" href="{{url('/list_transaksi')}}">Transaksi</a>
          <a class="" href="{{url('/list_pelanggan')}}">Discount</a>
        </div>
      </div> 
      <a href="#">Laporan Penjualan</a>
      <a href="#">Laporan Stock Barang</a>
      <a href="#">Akun Saya</a>
      <a href="#">Managemen Pengguna</a>
      <a href="#">Bantuan</a>
      <a href="#">Keluar</a>
      <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>

    <!-- nav MOBIle -->
    <div class="sidenav mobilehide">
      <div class="container-sidebar">
        <a href="{{url('/index')}}"><img src="{{ asset('image/logo2.png')}}" class="logo-dashboard"></a>
        <a class="sub-menu matop-nav1 mabot-nav-1" href="{{url('/dashboard')}}"><strong>DASHBOARD</strong></a>
        <strong class="sub-menu">MASTER</strong>
          <a class="link" href="{{url('/list_pelanggan')}}">Pelanggan</a>
          <a class="link" href="{{url('/list_produk')}}">Produk</a>
          <a class="link" href="{{url('/list_kategori')}}">Kategori</a>
          <a class="link" href="{{url('/list_barang')}}">Barang (Stok)</a>
          <a class="link" href="{{url('/list_outlet')}}">Outlet</a>
          <a class="link" href="{{url('/list_pegawai')}}">Pegawai</a>
          <a class="link" href="{{url('/list_transaksi')}}">Transaksi</a>
          <a class="link mabot-nav-1" href="#discount">Discount</a>
        <a class="sub-menu mabot-nav-1" href="#"><strong>LAPORAN PENJUALAN</strong></a>
        <a class="sub-menu mabot-nav-1" href="#"><strong>LAPORAN STOK BARANG</strong></a>
        <a href="{{url('/master')}}" class="btn mabot-nav-1 btn-create" style="background-color: white;">Create Data</a>
          <a class="link matop-nav1" href="#account">My Account</a>
          <a class="link" href="#user-management">User Management</a>
          <a class="link" href="#support">Support</a>
          <a class="link" href="#signout">Sign Out</a>
        </div>
    </div>