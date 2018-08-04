@extends('layouts.sidenav')
@section('title')
    <title>Azhapos - List Barang</title>
@endsection

@section('head')

@endsection

@section('content')
    <div class="main">
        <h1 class="mobile-size" style="color: #aaa;"><strong>Buat Transaksi</strong></h1>
        <div class="marginmin matop-50 matop-75 col-sm-12">
          <div class="row">
            
            <div class="col-sm-4">
              <a href="{{url('/penjualan/tambah')}}">
                <div class="btn-submenu">
                  <img class="image-sub-menu" src="{{ asset('image/transaction.png')}}">     
                  <p class="sub-title-menu">Penjualan</p>           
                </div>
              </a>
            </div>
            <div class=" col-sm-4">
              <a href="{{url('/pembelian/tambah')}}">
                <div class="btn-submenu">
                  <img class="image-sub-menu" src="{{ asset('image/transaction.png')}}">     
                  <p class="sub-title-menu">Pembelian</p>           
                </div>
              </a>
            </div>
            <div class="col-sm-4">
              <a href="{{url('/pemesanan/tambah')}}">
                <div class="btn-submenu">
                  <img class="image-sub-menu" src="{{ asset('image/transaction.png')}}">     
                  <p class="sub-title-menu">Pemesanan</p>           
                </div>
              </a>
            </div>
          </div>
        </div>
    </div>
    <!-- <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <button class="btn invisible" id="backButton">< Back</button> -->
  </body>
@endsection
@section('script')

@endsection