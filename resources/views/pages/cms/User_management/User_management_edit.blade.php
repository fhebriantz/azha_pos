<!DOCTYPE html>
@extends('layouts.sidenav')
@section('title')
    <title>Azhapos - Edit User Management</title>
@endsection

@section('head')
@endsection

@section('content')
    <div class="main">
        <h2 class="mobile-size" style="color: #aaa;"><strong>Edit User Management</strong></h2>
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
            </ul>
          </div>
        @endif



        <form method="POST" action="{{url('/user_management/'.$az_user_management->id.'/edit')}}">
        {{ csrf_field() }}
        <div class="col-sm-12">
          <div class="row">
            <div class="col-md-12 col-lg-6 padding-right">
                <div class="form-group">
                  <div class="row">
                    <label>Username</label>
                    <input type="text" class="form-control"  name="username" value="{{ $az_user_management->username }}"  placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label>Nama Lengkkap</label>
                    <input type="text" class="form-control"  name="nama_lengkap" value="{{ $az_user_management->nama_lengkap }}"  placeholder="Nama Lengkap">
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <a class="btn btn-warning" href="{{url('user_management/'.$az_user_management->id.'/gantipas')}}">Ganti Password</a>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label>Email</label>
                    <input type="text" class="form-control"  name="email" value="{{ $az_user_management->email }}"  placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label>Alamat</label>
                    <textarea name="alamat" class="textarea form-control" value="{{ $az_user_management->alamat }}" placeholder="Alamat">{{ $az_user_management->alamat }}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label>Kode Pos</label>
                    <input type="text" class="form-control"  name="kodepos" value="{{ $az_user_management->kodepos }}"  placeholder="Kodepos">
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label>Provinsi</label>
                    <select class="form-control" name="id_provinsi" style="width: 100%">
                      <option value="">-- Select Category --</option>
                      <option value="1"
                        <?php if (1 == $az_user_management->id_provinsi): ?>
                        <?php echo "selected" ?>
                        <?php endif ?>>Jakarta
                      </option>
                      <option value="2"
                        <?php if (2 == $az_user_management->id_provinsi): ?>
                        <?php echo "selected" ?>
                        <?php endif ?>>Bogor
                      </option>
                    </select>
                  </div>
                </div>
               
            </div>
            <div class="col-md-12 col-lg-6 padding-right">
                <div class="form-group">
                  <div class="row">
                    <label>No Telepon</label>
                    <input type="number" class="form-control"  name="no_telp" value="{{ $az_user_management->no_telp }}"  placeholder="No Telepon">
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label>Handphone</label>
                    <input type="number" class="form-control"  name="handphone" value="{{ $az_user_management->handphone }}"  placeholder="Handphone">
                  </div>
                </div>
                 <div class="form-group">
                  <div class="row">
                    <label>User Group</label>
                    <select class="form-control" name="id_user_group" style="width: 100%">
                      <option value="">-- Select Category --</option>
                      @foreach ($az_user_group as $group)
                       <option value="{{ $group->id }}"
                        <?php if ($group->id == $az_user_management->id_user_group): ?>
                        <?php echo "selected" ?>
                        <?php endif ?>>{{ $group->usergroup }}</option>
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
                      <option value="{{ $outlet->id }}"
                        <?php if ($outlet->id == $az_user_management->id_outlet): ?>
                        <?php echo "selected" ?>
                        <?php endif ?>>{{ $outlet->nama_outlet }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <label>Is Active</label>
                    <select class="form-control" name="is_active" style="width: 100%">
                      <option value="">-- Select Category --</option>
                      <option value="1"
                        <?php if (1 == $az_user_management->is_active): ?>
                        <?php echo "selected" ?>
                        <?php endif ?>>Active
                      </option>
                      <option value="0"
                        <?php if (0 == $az_user_management->is_active): ?>
                        <?php echo "selected" ?>
                        <?php endif ?>>Inactive
                      </option>
                    </select>
                  </div>
                </div>


                <div class="form-group">
                  <div class="row">
                    <label>Kota</label>
                    <select class="form-control" name="id_kota" style="width: 100%">
                      <option value="">-- Select Category --</option>
                      <option value="1"
                        <?php if (1 == $az_user_management->id_kota): ?>
                        <?php echo "selected" ?>
                        <?php endif ?>>Jakarta
                      </option>
                      <option value="2"
                        <?php if (2 == $az_user_management->id_kota): ?>
                        <?php echo "selected" ?>
                        <?php endif ?>>Bogor
                      </option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <label>Is Superadmin</label>
                    <select class="form-control" name="is_superadmin" style="width: 100%">
                      <option value="">-- Select Category --</option>
                      <option value="1"
                        <?php if (1 == $az_user_management->is_superadmin): ?>
                        <?php echo "selected" ?>
                        <?php endif ?>>Ya
                      </option>
                      <option value="0"
                        <?php if (0 == $az_user_management->is_superadmin): ?>
                        <?php echo "selected" ?>
                        <?php endif ?>>Tidak
                      </option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <label for=""></label>
                  <input style="width: 100%" class="btn btn-outline-info" type="submit" value="Ubah User Group" name="submit" />
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