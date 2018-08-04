@extends('layouts.sidenav')
@section('title')
    <title>Azhapos - Tambah</title>
@endsection

@section('head')
@endsection

@section('content')

    <div class="main">
        <h1 class="title-size">Buat Data Master</h1>
        <div class="marginmin matop-50 col-md-12">
          <div class="row">
            <div class="col-md-6 col-lg-3">
              <a class="no-under" href="{{url('/pelanggan/tambah')}}">
                <div class="btn-submenu">
                  <img class="image-sub-menu" src="{{ asset('image/user.png')}}">     
                  <p class="no-under sub-title-menu">Pelanggan</p>             
                </div>
              </a>
            </div>
            <div class="col-md-6 col-lg-3">
              <a class="no-under" href="{{url('/produk/tambah')}}">
                <div class="btn-submenu">
                  <img class="image-sub-menu" src="{{ asset('image/package.png')}}">     
                <p class="sub-title-menu">Produk</p>            
                </div>
              </a>
            </div>
            <div class="col-md-6 col-lg-3">
              <a class="no-under" href="{{url('/kategori/tambah')}}">
                <div class="btn-submenu">
                  <img class="image-sub-menu" src="{{ asset('image/file.png')}}">     
                  <p class="sub-title-menu">Kategori</p>              
                </div>
              </a>
            </div>
            <div class="col-md-6 col-lg-3">
              <a href="{{url('/barang/tambah')}}">
                <div class="btn-submenu">
                  <img class="image-sub-menu" src="{{ asset('image/stock.png')}}">     
                  <p class="sub-title-menu">Barang <br>(Stock)</p>               
                </div>
              </a>
            </div>
            <div class="col-md-6 col-lg-3">
              <a href="{{url('/outlet/tambah')}}">
                <div class="btn-submenu">
                  <!-- <img class="image-sub-menu" src="{{ asset('image/#.png')}}">      -->
                  <p class="sub-title-menu">Outlet</p>             
                </div>
              </a>
            </div>
            <div class="col-md-6 col-lg-3">
              <a href="{{url('/pegawai/tambah')}}">
                <div class="btn-submenu">
                  <img class="image-sub-menu" src="{{ asset('image/boss.png')}}">     
                  <p class="sub-title-menu">Pegawai</p>           
                </div>
              </a>
            </div>
            <div class="col-md-6 col-lg-3">
              <a href="{{url('/trans_master')}}">
                <div class="btn-submenu">
                  <img class="image-sub-menu" src="{{ asset('image/transaction.png')}}">     
                  <p class="sub-title-menu">Transaksi</p>           
                </div>
              </a>
            </div>
            <div class="col-md-6 col-lg-3">
              <a href="{{url('/user_master')}}">
                <div class="btn-submenu">
                  <img class="image-sub-menu" src="{{ asset('image/user.png')}}">     
                  <p class="sub-title-menu">User</p>           
                </div>
              </a>
            </div>
          </div>
        </div>
    </div>
@endsection
@section('script')

@endsection