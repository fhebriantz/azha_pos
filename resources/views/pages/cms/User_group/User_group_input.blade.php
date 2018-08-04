<!DOCTYPE html>
@extends('layouts.sidenav')
@section('title')
    <title>Azhapos - Tambah User Group</title>
@endsection

@section('head')

@endsection

@section('content')
    <div class="main">
        <h2 class="mobile-size" style="color: #aaa;"><strong>Tambah User Group</strong></h2>
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
            </ul>
          </div>
        @endif
        <form method="POST" action="{{url('/user_group/tambah')}}">
        {{ csrf_field() }}
        <div class="col-sm-12">
          <div class="row">
            <div class="col-md-12 col-lg-12 padding-right">
                <div class="form-group">
                  <div class="row">
                    <label>User Group</label>
                    <input type="text" class="form-control"  name="usergroup" value="{{ old('usergroup') }}"  placeholder="User Group">
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label>Deskripsi</label>
                    <textarea  name="description" value="{{ old('description') }}"  class="textarea form-control" placeholder="Description">{{ old('description') }}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label>Is Active</label>
                    <select class="form-control" name="is_active" style="width: 100%">
                      <option value="">-- Select Category --</option>
                      <option value="1">Active</option>
                      <option value="0">Disable</option>
                    </select>
                  </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-12 padding-right">
                <div class="row">
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