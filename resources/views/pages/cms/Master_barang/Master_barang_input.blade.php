@extends('layouts.sidenav')
@section('title')
    <title>Azhapos - Tambah Barang</title>
@endsection

@section('head')

@endsection

@section('content')
    <div class="main">
        <h2 class="mobile-size" style="color: #aaa;"><strong>Tambah Barang (Stock)</strong></h2>
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
            </ul>
          </div>
        @endif
        <form method="POST" action="{{url('/barang/tambah')}}">
        {{ csrf_field() }}
        <div class="col-sm-12" style="margin-left: -15px">
          <div class="">
            <div class="col-sm-12 col-md-12 col-lg-6 padding-right">
    
                    <input type="hidden" class="form-control" name="kode_barang" value="{{ $id_extend }}" readonly="" placeholder="Product Code">
                
                 <div class="form-group">
                  <div class="row">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang" value="{{ old('nama_barang') }}" placeholder="Product Name">
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label for="deskripsi">Deskripsi kategori</label>
                    <textarea name="deskripsi" class="textarea form-control" value="{{ old('deskripsi') }}" placeholder="Description">{{ old('deskripsi') }}</textarea>
                  </div>
                </div>
                
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 padding-right">
               <div class="form-group">
                  <div class="row">
                    <label>kategori</label>
                    <select class="form-control" name="kode_kategori" style="width: 100%">
                      <option value="">-- Select Category --</option>
                      @foreach ($az_mast_kategori as $kategori)
                      <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-12" style="margin-left: -15px; margin-right: -15px;">
                      <div class="row">
                        <div  class="col-sm-4 mabot-mob rightnol">
                          <label class="mobilehide-text" for="stok_barang">Stok Barang</label>
                          <label class="mobileshow-text" for="stok_barang">Stok</label>
                          <input type="number" class="form-control" value="{{ old('stok_barang') }}" name="stok_barang" placeholder="Stock Inventory">
                        </div>
                        <div  class="col-sm-4 mabot-mob rightnol">
                          <label class="mobilehide-text" for="berat_barang">Berat Barang</label>
                          <label class="mobileshow-text" for="berat_barang">Berat</label>
                          <input type="number" class="form-control" value="{{ old('berat_barang') }}" name="berat_barang" placeholder="Product Weight">
                        </div>
                        <div  class="col-sm-4 rightnol">
                          <label class="mobilehide-text" for="karat">Besar Karat</label>
                          <label class="mobileshow-text" for="karat">Karat</label>
                          <input type="number" class="form-control" value="{{ old('karat') }}" name="karat" placeholder="Besar Karat">
                        </div>
                      </div>
                    </div>
                  </div> 
                  <div style="margin-top: 20px">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="row">
                        <label for="harga_barang">Harga</label>
                        <input type="number" name="harga_barang" value="{{ old('harga_barang') }}" class="widthsub form-control" placeholder="Price" style="padding-right: -20px;">
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="row">
                        <label for="dibuat">Tanggal Dibuat</label>
                        <input type="text" class="form_date form-control" name="dibuat" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" readonly="" value="{{ old('dibuat') }}">
                      </div>
                    </div>
                  </div>
                </div>
                <div style="margin-top: 20px">
                  <div class="row">
                    <label>Tambah Foto</label>
                    <a href="" class="btn btn-info" style="width: 100%">Drag Here</a>
                    <p class="text-right" style="width: 100%; font-size: 12px;">anda bisa upload beberapa foto kesini</p>
                    <input class="btn btn-outline-info" style="width: 100%" type="submit" value="Ubah Data Barang" name="submit" />
                  </div>
                </div>
                </div>
                
            </div>
          </div>
        </div>
        </form>
    </div>
@endsection
@section('script')

@endsection