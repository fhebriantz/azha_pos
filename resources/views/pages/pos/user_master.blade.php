@extends('layouts.sidenav')
@section('title')
    <title>Azhapos - List Barang</title>
@endsection

@section('head')

@endsection

@section('content')
    <div class="main">
        <h1 class="mobile-size" style="color: #aaa;"><strong>Buat User</strong></h1>
        <div class="marginmin matop-50 matop-75 col-sm-12">
          <div class="row">
            <div class="col-sm-6">
              <a href="{{url('/user_management/tambah')}}">
                <div class="btn-submenu">
                  <img class="image-sub-menu" src="{{ asset('image/user.png')}}">     
                  <p class="sub-title-menu">User Management</p>           
                </div>
              </a>
            </div>
            <div class=" col-sm-6">
              <a href="{{url('/user_group/tambah')}}">
                <div class="btn-submenu">
                  <img class="image-sub-menu" src="{{ asset('image/user.png')}}">     
                  <p class="sub-title-menu">User Group</p>           
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