<!DOCTYPE html>
@extends('layouts.sidenav')
@section('title')
    <title>Azhapos - Edit User Management</title>
@endsection

@section('head')
@endsection

@section('content')
    <div class="main">
        <h2 class="mobile-size" style="color: #aaa;"><strong>Ganti Password User</strong></h2>
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
            </ul>
          </div>
        @endif
        <form method="POST" action="{{url('/user_management/'.$az_user_management->id.'/gantipas')}}">
        {{ csrf_field() }}
        <div class="col-sm-12">
          <div class="row">
            <div class="col-md-12 col-lg-6 padding-right">
            	<div class="form-group">
                  <div class="row">
                    <label>Username</label>
                    <input readonly="" type="text" class="form-control"  name="username" value="{{$az_user_management->username}}"  placeholder="Password Lama">
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label>Password Lama</label>
                    <input type="text" class="form-control"  name="old_password" value=""  placeholder="Password Lama">
                    @if (Session::has('old_pass'))
                    	<p style="padding-top: 10px; margin-bottom: 0px !important; color: #d71635"><strong>{{ Session::get('old_pass') }}</strong></p>
			        @endif
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label>Password Baru</label>
                    <input type="text" class="form-control"  name="new_password" value=""  placeholder="Password Baru">
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label>Konfirmasi Password</label>
                    <input type="text" class="form-control"  name="password_confirmation" value=""  placeholder="Konfirmasi Password">
                    @if (Session::has('confirm_pass'))
                    	<p style="padding-top: 10px; margin-bottom: 0px !important; color: #d71635"><strong>{{ Session::get('confirm_pass') }}</strong></p>
			        @endif
                  </div>
                </div>

                <div class="row">
                  <label for=""></label>
                  <input style="width: 100%" class="btn btn-outline-info" type="submit" value="Ubah Password" name="submit" />
                </div>
               
            </div>
          </div>
        </div>
      <input type="hidden" name="_method" value="PUT">
      </form>
    </div>
@endsection
@section('script')

@endsection