<!DOCTYPE html>
@extends('layouts.sidenav')
@section('title')
    <title>Azhapos - Edit kategori</title>
@endsection

@section('head')

@endsection

@section('content')
    <div class="main">
        <h2 class="mobile-size" style="color: #aaa;"><strong>Edit kategori</strong></h2>
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
            </ul>
          </div>
        @endif
        <form method="POST" action="{{url('/kategori/'.$az_mast_kategori->id.'/edit')}}">
        {{ csrf_field() }}
        <div class="col-sm-12">
          <div class="row">
            <div class="col-md-12 col-lg-6 padding-right">
                <div class="form-group">
                  <div class="row">
                    <label for="kd">Kode kategori</label>
                    <input type="text" readonly="" class="form-control"  name="kode_kategori" value="{{ $az_mast_kategori->id }}"  placeholder="Product Code">
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label for="desc">Deskripsi kategori</label>
                    <textarea  name="deskripsi" value="{{ $az_mast_kategori->deskripsi }}"  class="textarea form-control" placeholder="Description">{{ $az_mast_kategori->deskripsi }}</textarea>
                  </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 padding-right">
                <div class="form-group">
                  <div class="row">
                    <label for="nm_prod">Nama kategori</label>
                    <input type="text" class="form-control" name="nama_kategori" value="{{ $az_mast_kategori->nama_kategori }}"  placeholder="Your Email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label>Inisial</label>
                    <input readonly="" type="text" class="form-control" maxlength="2" name="initial" value="{{ $az_mast_kategori->initial }}" style="text-transform:uppercase" placeholder="EM (emas)">
                  </div>
                </div>
                <div class="row">
                  <input style="width: 100%" class="btn btn-outline-info" type="submit" value="Ubah Data kategori" name="submit" />
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