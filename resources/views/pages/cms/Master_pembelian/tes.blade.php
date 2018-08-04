@extends('layouts.sidenav')
@section('title')
    <title>Azhapos - List Barang</title>
@endsection

@section('head')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@endsection

@section('content')
<div class="main maen">
                      @foreach($az_trans_pembelian as $trans_beli)
                      {{ csrf_field() }}
                      <p class="row"><strong>{{$trans_beli->id_trans}} = {{$trans_beli->nama_pegawai}}</strong></p>
                      <div class="row">
                        <div style="padding: 5px">{{$trans_beli->id_trans}}</div>
                        <div style="padding: 5px">{{$trans_beli->nama_pelanggan}}</div>
                        <div style="padding: 5px">{{$trans_beli->tgl_transaksi}}</div>
                      </div>
                      
                      <?php $result = App\Http\Controllers\Model\Trans_pembelian::detail_beli($trans_beli->id_trans) ?>
                      @foreach($result as $detil)
                      {{ csrf_field() }}
                       <p class="row"><strong>{{$detil->id_trans}} = {{$detil->nama_barang}} = {{$detil->harga_barang}}</strong></p>
                      <div class="row">
                        <div style="padding: 5px">{{$detil->kode_barang}}</div>
                        <div style="padding: 5px">{{$detil->berat_barang}}</div>
                        <div style="padding: 5px">{{$detil->karat_barang}}</div>
                        <div style="padding: 5px">{{$detil->jumlah_barang}}</div>
                        <div style="padding: 5px">{{$trans_beli->tgl_transaksi}}</div>
                        <div style="padding: 5px">{{$trans_beli->nama_pelanggan}}</div>
                        <div style="padding: 5px">{{$trans_beli->tipe_bayar}}</div>
                        <div style="padding: 5px">{{$detil->diskon}}</div>
                      </div>
                      @endforeach

                      @endforeach
</div>
@endsection

@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection          