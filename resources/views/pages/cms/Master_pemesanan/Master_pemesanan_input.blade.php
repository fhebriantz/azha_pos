@extends('layouts.sidenav')
@section('title')
    <title>Azhapos - Tambah Pemesanan</title>
@endsection

@section('head')

@endsection

@section('content')
    <div class="main">
        <h2 class="mobile-size" style="color: #aaa;"><strong>Tambah Pemesanan</strong></h1>
        <div class="col-sm-12">
          <div class="row">
            <div class="col-md-12 col-lg-6 padding-right">
                <div class="form-group">
                  <div class="row">
                    <label for="usr">Nomor Transaksi</label>
                    <input type="text" class="form-control" id="usr" placeholder="Transaction Number">
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label for="almt">Keterangan Barang</label>
                    <input type="hidden" class="form-control" id="almt">
                    <textarea form="almt" class="textarea form-control" placeholder="Description"></textarea>
                  </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 padding-right">
                <div class="form-group">
                  <div class="row">
                    <label for="eml">Nama Barang</label>
                    <input type="text" class="form-control" id="eml" placeholder="Nama Pegawai">
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="row">
                        <label for="almt">Kode</label>
                        <input type="text" id="almt" class="widthsub widthim form-control" placeholder="Kode Barang" style="padding-right: -20px;">
                      </div>
                    </div>
                  </div>
                  <div style="margin-top: 20px">
                    <div class="row">
                      <label for="Email">Email</label>
                      <input type="text" class="form-control" id="email" placeholder="Your Email">
                    </div>
                  </div>
                  <div style="margin-top: 20px">
                    <div class="row">
                      <label for="phone">No Handphone</label>
                      <input type="Number" class="form-control" id="phone" placeholder="Your Phone">
                    </div>
                  </div>
                </div>

              <div class="row">
                <a href="" class="btn btn-outline-info" style="width: 100%">Tambah Data Barang</a>      
                
              </div>  
            </div>
  
          </div>
        </div>
    </div>
@endsection
@section('script')

@endsection