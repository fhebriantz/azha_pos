<!DOCTYPE html>
@extends('layouts.sidenav')
@section('title')
    <title>Azhapos - Tambah kategori</title>
@endsection

@section('head')

@endsection

@section('content')
    <div class="main">
        <h2 class="mobile-size" style="color: #aaa;"><strong>Tambah kategori</strong></h2>
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
            </ul>
          </div>
        @endif
        <form method="POST" action="{{url('/kategori/tambah')}}">
        {{ csrf_field() }}
        <div class="col-sm-12">
          <div class="row">
            <div class="col-md-12 col-lg-6 padding-right">
                <div class="form-group">
                  <div class="row">
                    <label for="nm_prod">Nama kategori</label>
                    <input type="text" class="form-control" name="nama_kategori" value="{{ old('nama_kategori') }}"  placeholder="Your Email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label for="desc">Deskripsi kategori</label>
                    <textarea  name="deskripsi" value="{{ old('deskripsi') }}"  class="textarea form-control" placeholder="Description">{{ old('deskripsi') }}</textarea>
                  </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 padding-right">
                <div class="form-group">
                  <div class="row">
                    <label>Inisial</label>
                    <input type="text" class="form-control" maxlength="2" name="initial" value="{{ old('initial') }}" style="text-transform:uppercase"  placeholder="EM (emas)">
                    @if (Session::has('init'))
                      <p style="padding-top: 10px; margin-bottom: 0px !important; color: #d71635"><strong>{{ Session::get('init') }}</strong></p>
                    @endif
                  </div>
                </div>
                <div class="row">
                  <input style="width: 100%" class="btn btn-outline-info" type="submit" value="Tambah Data kategori" name="submit" />
                </div>
            </div>
          </div>
        </div>
      </form>
    </div>
@endsection
@section('script')

@endsection