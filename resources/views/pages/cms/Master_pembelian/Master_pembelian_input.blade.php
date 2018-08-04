@extends('layouts.sidenav')
@section('title')
    <title>Azhapos - Tambah Pembelian</title>
@endsection

@section('head')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />


@endsection

@section('content')
    <div class="main">
        <h2 class="mobile-size" style="color: #aaa;"><strong>Tambah Pembelian</strong></h1>
        <div class="col-sm-12 ">
          <div class="bungkus-add">
              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                  </ul>
                </div>
              @endif
            <form method="POST" action="{{url('/pembelian/tambah')}}">
            {{ csrf_field() }}
            <div class="bungkus-input col-lg-12">
              <div class="dalem-input fontinput">

                <label for="">ID Transaksi</label>
                <input class="form-control font-control" type="text" name="id_trans" id="id_trans" placeholder="ID Transaksi" value="{{ $id_transaksi }}"  style="width: 100%">

                <label for="">Total Harga</label>
                <input readonly="" class="form-control font-control" type="number" name="total_barang" placeholder="Rp. 500.000" value="" style="width: 100%">

                <label for="">Tipe Pembayaran<span style="color: #d71635">*</span></label>
                <select class="form-control font-control" name="tipe_bayar" style="width: 100%">
                  <option value="">-- Pilih Kategori --</option>
                  <option value="1">Tunai</option>
                  <option value="2">Debit</option>
                  <option value="3">Kredit</option>
                </select>

                <label for="">Kode Pegawai<span style="color: #d71635">*</span></label>
                <select class="form-control font-control" name="kode_pegawai" style="width: 100%">
                  <option value="">-- Pilih Pegawai --</option>
                  @foreach ($az_mast_pegawai as $pegawai)
                  <option value="{{ $pegawai->kode_pegawai }}">{{ $pegawai->nama_pegawai }}</option>
                  @endforeach
                </select>

                <label for="">Kode Pelanggan<span style="color: #d71635">*</span></label>
                <select class="form-control font-control" name="kode_pelanggan" style="width: 100%">
                  <option value="">-- Pilih Pelanggan --</option>
                  @foreach ($az_mast_pelanggan as $pelanggan)
                  <option value="{{ $pelanggan->kode_pelanggan }}">{{ $pelanggan->nama_pelanggan }}</option>
                   @endforeach
                </select>

                <label for="">Tanggal Transaksi<span style="color: #d71635">*</span></label>
                <input type="text" class="form_date form-control  font-control"  name="tgl_transaksi" value="{{ old('tgl_transaksi') }}"  data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" readonly="">

              </div>

              <div id="fieldList">
              
                <div class="dalem-input form-input table fontinput">
                  <!-- ID_Trans -->
                  <input class="form-control font-control" hidden type="text" name="id_trans_detail[]" id="id_trans" placeholder="ID Transaksi" value="{{ $id_transaksi }}" readonly style="width: 100%">

                  <label for="">Nama Barang<span style="color: #d71635">*</span></label>
                    <input class="form-control font-control" type="text" name="nama_barang[]" id="nama_barang" placeholder="Nama Barang" value="{{ old('nama_barang[]') }}"  style="width: 100%">

                  <label for="">Kode Barang<span style="color: #d71635">*</span></label>
                    <input class="form-control font-control" type="number" name="kode_barang[]" id="kode_barang" value="{{ old('kode_barang[]') }}" placeholder="Kode Barang" style="width: 100%">

                  <label for="">Berat Barang</label>
                    <input class="form-control font-control" type="number" name="berat_barang[]" value="{{ old('berat_barang[]') }}" placeholder="Berat (gram)" style="width: 100%;">

                  <label for="">Jumlah Karat<span style="color: #d71635">*</span></label>
                    <input class="form-control font-control" type="number" name="karat_barang[]" value="{{ old('karat_barang[]') }}" placeholder="Karat" maxlength="5" onkeyup="this.value = minmax(this.value, 0, 25)" style="width: 100%;">

                  <label for="">Harga Barang</label>
                    <input class="form-control font-control" type="number" name="harga_barang[]" placeholder="Harga Barang" value="{{ old('harga_barang[]') }}" style="width: 100%">

                  <label for="">Dibuat Tanggal<span style="color: #d71635">*</span></label>
                    <input type="text" class="form_date form-control  font-control"  name="dibuat[]" value="{{ old('dibuat[]') }}"  data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" readonly="">

                  <label for="">Jumlah</label>
                    <input class="form-control font-control" type="number" name="jumlah_barang[]" placeholder="Jumlah Barang" value="{{ old('jumlah_barang[]') }}" style="width: 100%">

                  <label for="">Diskon<span style="color: #d71635">*</span></label>
                    <input class="form-control font-control" type="number" name="diskon[]" placeholder="Diskon %" value="{{ old('diskon[]') }}" style="width: 100%">

                  <label for="">Keterangan</label>
                    <textarea name="keterangan[]" value="{{ old('keterangan[]') }}"  class=" font-control textarea form-control" placeholder="Keterangan">{{ old('keterangan[]') }}</textarea>


                  <label for="">Foto<span style="color: #d71635">*</span></label>
                    <input class="form-control font-control" type="text" name="photo[]" placeholder="image.jpg" value="" style="width: 100%">
                </div>
            </div>
              
              <table width="100%" class="">
                  <tr>
                    <td width="50%"><input class="btn btn-info" type="Submit" name="Submit" value="Submit" style="width: 100%"></td>
                    <td  width="50%"><button class="btn btn-warning" id="addMore" style="width: 100%">Add More</button></td>
                  </tr>
              </table>
          </div>
        </form>
      </div>
    </div>
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript">
    $( function() {
    $( "#nama_barang" ).autocomplete({
      source: '{{ url('nama_barang') }}'
    });
  } );

  $( function() {
    $( "#kode_barang" ).autocomplete({
      source: '{{ url('kode_barang') }}'
    });
  } );
</script>

<script type="text/javascript">
  function minmax(value, min, max) 
  {
      if(parseInt(value) < min || isNaN(parseInt(value))) 
          return 0; 
      else if(parseInt(value) > max) 
          return 25; 
      else return value;
  }
</script>

<script>
  $(function() {
    $("#addMore").click(function(e) {
      e.preventDefault();
      $("#fieldList").append('<div class="dalem-input form-input table fontinput"><label for="">Nama Barang<span style="color: #d71635">*</span></label><input class="form-control font-control" type="text" name="nama_barang[]" id="nama_barang" placeholder="Nama Barang" value=""  style="width: 100%"><label for="">Kode Barang<span style="color: #d71635">*</span></label><input class="form-control font-control" type="number" name="kode_barang[]" id="kode_barang" value="" placeholder="Kode Barang" style="width: 100%"><label for="">Berat Barang</label><input class="form-control font-control" type="text" name="berat_barang[]" value="" placeholder="Berat (gram)" style="width: 100%;"><label for="">Jumlah Karat<span style="color: #d71635">*</span></label><select class="form-control font-control" name="karat_barang[]" style="width: 100%"><option value="">-- Pilih Karat --</option></select><label for="">Harga Barang</label><input class="form-control font-control" type="number" name="harga_barang[]" placeholder="Harga Barang" value="" style="width: 100%"><label for="">Dibuat Tanggal<span style="color: #d71635">*</span></label><input type="text" class="form_date form-control  font-control"  name="dibuat[]" value=""  data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" readonly=""><label for="">Jumlah<</label><input class="form-control font-control" type="number" name="jumlah_barang[]" placeholder="Jumlah Barang" value="" style="width: 100%"><label for="">Diskon<span style="color: #d71635">*</span></label><input class="form-control font-control" type="number" name="diskon[]" placeholder="Diskon %" value="" style="width: 100%"><label for="">Keterangan</label><textarea name="keterangan[]" value="{{ old('keterangan') }}"  class=" font-control textarea form-control" placeholder="Keterangan">{{ old('keterangan') }}</textarea><label for="">Kode Pegawai<span style="color: #d71635">*</span></label><select class="form-control font-control" name="kode_pegawai[]" style="width: 100%"><option value="">-- Pilih Pegawai --</option></select><label for="">Kode Pelanggan<span style="color: #d71635">*</span></label><select class="form-control font-control" name="kode_pelanggan[]" style="width: 100%"><option value="">-- Pilih Pelanggan --</option></select><label for="">Foto<span style="color: #d71635">*</span></label><input class="form-control font-control" type="text" name="photo[]" placeholder="image.jpg" value="" style="width: 100%"><label for="">Tanggal Transaksi<span style="color: #d71635">*</span></label><input type="text" class="form_date form-control  font-control"  name="tgl_transaksi[]" value=""  data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" readonly=""></div>');
    });
  });
  </script>
@endsection