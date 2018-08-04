@extends('layouts.sidenav')
@section('title')
    <title>Azhapos - Edit Pelanggan</title>
@endsection

@section('head')
@endsection

@section('content')
    <div class="main">
        <h2 class="mobile-size" style="color: #aaa;"><strong>Edit Pelanggan</strong></h2>
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
            </ul>
          </div>
        @endif
        <form method="POST" action="{{url('/pelanggan/'.$az_mast_pelanggan->id.'/edit')}}">
        {{ csrf_field() }}
        <div class="col-sm-12">
          <div class="row">
            <div class="col-md-12 col-lg-6 padding-right">
                <div class="form-group">
                  <div class="row">
                    <label for="usr">Name</label>
                    <input type="text" class="form-control" name="nama_pelanggan" value="{{ $az_mast_pelanggan->nama_pelanggan }}" placeholder="Your Name">
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label for="almt">Alamat</label>
                    <textarea name="alamat" value="{{ $az_mast_pelanggan->alamat }}"  class="textarea form-control" placeholder="Your Address">{{ $az_mast_pelanggan->alamat }}</textarea>
                  </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 padding-right">
                <div class="form-group">
                  <div class="row">
                    <label for="eml">Email</label>
                    <input type="text" class="form-control" name="email" value="{{ $az_mast_pelanggan->email }}" placeholder="Your Email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="row">
                        <label for="almt">Tempat</label>
                        <input type="text" name="tempat_lahir" value="{{ $az_mast_pelanggan->tempat_lahir }}"  class="widthsub form-control" placeholder="Tempat" style="padding-right: -20px;">
                      </div>
                    </div>
                    <div class="col-md-9">
                      <div class="row">
                        <label for="tgl">Tanggal Lahir</label>
                        <input type="text" class="form_date form-control"  name="tgl_lahir" value="{{ $az_mast_pelanggan->tgl_lahir }}"  data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" readonly="">
                      </div>
                    </div>
                  </div>
                  <div style="margin-top: 20px">
                    <div class="row">
                      <label for="phone">No Telepon</label>
                      <input type="Number" name="handphone" value="{{ $az_mast_pelanggan->handphone }}"  class="form-control" id="phone"  placeholder="08xxxxxxxxxx" maxlength="13">
                    </div>
                  </div>
                </div>

              <div class="row">
                <input style="width: 100%" class="btn btn-outline-info" type="submit" value="Ubah Data Pelanggan" name="submit" />
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