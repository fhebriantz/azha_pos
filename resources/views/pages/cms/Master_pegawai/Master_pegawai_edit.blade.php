@extends('layouts.sidenav')
@section('title')
    <title>Azhapos - Edit Pegawai</title>
@endsection

@section('head')

@endsection

@section('content')
    <div class="main">
        <h2 class="mobile-size" style="color: #aaa;"><strong>Edit Pegawai</strong></h2>
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
            </ul>
          </div>
        @endif
        <form method="POST" action="{{url('/pegawai/'.$az_mast_pegawai->id.'/edit')}}">
        {{ csrf_field() }}
        <div class="col-sm-12">
          <div class="row">
            <div class="col-md-12 col-lg-6 padding-right">
                <div class="form-group">
                  <div class="row">
                    <label for="usr">Kode Pegawai</label>
                    <input type="text" class="form-control" name="kode_pegawai" readonly="" value="{{ $az_mast_pegawai->id }}" placeholder="Your Name">
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label for="eml">Nama Pegawai</label>
                    <input type="text" class="form-control" name="nama_pegawai" value="{{ $az_mast_pegawai->nama_pegawai }}" placeholder="Nama Pegawai">
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label for="almt">Alamat</label>
                    <textarea name="alamat" value="{{ $az_mast_pegawai->alamat }}" class="textarea form-control" placeholder="Your Address">{{ $az_mast_pegawai->alamat }}</textarea>
                  </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 padding-right">
                
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="row">
                        <label for="almt">Tempat</label>
                        <input type="text" name="tempat_lahir" value="{{ $az_mast_pegawai->tempat_lahir }}" class="widthsub form-control" placeholder="Tempat" style="padding-right: -20px;">
                      </div>
                    </div>
                    <div class="col-md-9">
                      <div class="row">
                        <label for="tgl">Tanggal Lahir</label>
                        <input type="text" class="form_date form-control" name="tgl_lahir" value="{{ $az_mast_pegawai->tgl_lahir }}" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" readonly="">
                      </div>
                    </div>
                  </div>
                  <div style="margin-top: 20px">
                    <div class="row">
                      <label for="Email">Email</label>
                      <input type="text" class="form-control" name="email" value="{{ $az_mast_pegawai->email }}" placeholder="Your Email">
                    </div>
                  </div>
                  <div style="margin-top: 20px">
                    <div class="row">
                      <label for="phone">No Handphone</label>
                      <input type="Number" class="form-control" placeholder="08xxxxxxxxxx" maxlength="13" value="{{ $az_mast_pegawai->handphone }}" name="handphone">
                    </div>
                  </div>
                </div>

              <div class="row">
                <input style="width: 100%" class="btn btn-outline-info" type="submit" value="Ubah Data Pegawai" name="submit" />
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