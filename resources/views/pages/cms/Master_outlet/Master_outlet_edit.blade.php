@extends('layouts.sidenav')
@section('title')
    <title>Azhapos - Edit Outlet</title>
@endsection

@section('head')

@endsection

@section('content')
    <div class="main">
        <h2 class="mobile-size" style="color: #aaa;"><strong>Edit Outlet</strong></h2>
         @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
            </ul>
          </div>
        @endif
        <form method="POST" action="{{url('/outlet/'.$az_mast_outlet->id.'/edit')}}">
        {{ csrf_field() }}
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-12">
                  <div class="form-group">
                    <div class="row">
                      <label for="nama_outlet">Nama Outlet</label>
                      <input type="text" class="form-control" name="nama_outlet" value="{{ $az_mast_outlet->nama_outlet }}" placeholder="Outlet Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label for="lokasi_outlet">Lokasi Outlet</label>
                      <input type="text" class="form-control" name="lokasi_outlet" value="{{ $az_mast_outlet->lokasi_outlet }}" placeholder="Outlet Location">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label for="deskripsi">Deskripsi Outlet</label>
                      <textarea name="deskripsi" class="textarea form-control" value="{{ $az_mast_outlet->deskripsi }}" placeholder="Description">{{ $az_mast_outlet->deskripsi }}</textarea>
                    </div>
                  </div>
              </div>
            </div>
            
          </div>
          <div class="col-md-3">
            <div class="row">
             <input style="width: 100%" class="btn btn-outline-info" type="submit" value="Ubah Data Outlet" name="submit" />
            </div>
          </div>
          <input type="hidden" name="_method" value="PUT">
        </form>
    </div>
@endsection
@section('script')

@endsection