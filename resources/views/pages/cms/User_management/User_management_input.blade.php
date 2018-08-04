<!DOCTYPE html>
@extends('layouts.sidenav')
@section('title')
    <title>Azhapos - Tambah User Management</title>
@endsection

@section('head')

@endsection

@section('content')
    <div class="main">
        <h2 class="mobile-size" style="color: #aaa;"><strong>Tambah User Management</strong></h2>
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
            </ul>
          </div>
        @endif



        <form method="POST" action="{{url('/user_management/tambah')}}">
        {{ csrf_field() }}
        <div class="col-sm-12">
          <div class="row">
            <div class="col-md-12 col-lg-6 padding-right">
                <div class="form-group">
                  <div class="row">
                    <label>Username</label>
                    <input type="text" class="form-control"  name="username" value="{{ old('username') }}"  placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label>Nama Lengkkap</label>
                    <input type="text" class="form-control"  name="nama_lengkap" value="{{ old('nama_lengkap') }}"  placeholder="Nama Lengkap">
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label>Password</label>
                    <input type="text" class="form-control"  name="password" value="{{ old('password') }}"  placeholder="Password">
                  </div>
                </div>
                 <div class="form-group">
                  <div class="row">
                    <label>Email</label>
                    <input type="text" class="form-control"  name="email" value="{{ old('email') }}"  placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label>Alamat</label>
                    <textarea name="alamat" class="textarea form-control" value="{{ old('alamat') }}" placeholder="Alamat">{{ old('alamat') }}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label>Kode Pos</label>
                    <input type="text" class="form-control"  name="kodepos" value="{{ old('kodepos') }}"  placeholder="Kodepos">
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <label>Provinsi</label>
                    <select class="form-control" name="id_provinsi" style="width: 100%">
                      <option value="">-- Select Category --</option>
                      <option selected="" value="1">Jakarta</option>
                      <option value="2">Jawa Barat</option>
                    </select>
                  </div>
                </div>
                
            </div>
            <div class="col-md-12 col-lg-6 padding-right">
                <div class="form-group">
                  <div class="row">
                    <label>No Telepon</label>
                    <input type="number" class="form-control"  name="no_telp" value="{{ old('no_telp') }}"  placeholder="No Telepon">
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label>Handphone</label>
                    <input type="number" class="form-control"  name="handphone" value="{{ old('handphone') }}"  placeholder="Handphone">
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label>User Group</label>
                    <select class="form-control" name="id_user_group" style="width: 100%">
                      <option value="">-- Select Category --</option>
                      @foreach ($az_user_group as $group)
                      <option value="{{ $group->id }}">{{ $group->usergroup }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label>Outlet</label>
                    <select class="form-control" name="id_outlet" style="width: 100%">
                      <option value="">-- Select Category --</option>
                      @foreach ($az_mast_outlet as $outlet)
                      <option value="{{ $outlet->id }}">{{ $outlet->nama_outlet }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <label>Is Active</label>
                    <select class="form-control" name="is_active" style="width: 100%">
                      <option value="">-- Select Category --</option>
                      <option selected="" value="1">Active</option>
                      <option value="0">Disable</option>
                    </select>
                  </div>
                </div>


                <div class="form-group">
                  <div class="row">
                    <label>Kota</label>
                    <select class="form-control" name="id_kota" style="width: 100%">
                      <option value="">-- Select Category --</option>
                      <option selected="" value="1">Jakarta</option>
                      <option value="2">Bogor</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <label>Is Superadmin</label>
                    <select class="form-control" name="is_superadmin" style="width: 100%">
                      <option value="">-- Select Category --</option>
                      <option value="1">Ya</option>
                      <option value="0">Tidak</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <label for=""></label>
                  <input style="width: 100%" class="btn btn-outline-info" type="submit" value="Tambah User Group" name="submit" />
                </div>
            </div>
          </div>
        </div>
      </form>
    </div>
@endsection
@section('script')

@endsection