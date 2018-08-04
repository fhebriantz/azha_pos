@extends('layouts.sidenav')
@section('title')
    <title>Azhapos - Barang</title>
@endsection

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/default.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/component.css?v=0.001')}}" />
@endsection

@section('content')
    <div class="main">
        <h2 class="mobile-size mobilehide" style="color: #aaa;"><strong>Master Barang (Stock)</strong></h2>
        <h2 class="mobile-size mobileshow" style="color: #aaa;"><strong>Master Barang</strong></h2>
        <div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
          <div class="cbp-vm-options">
            <a href="#" class="cbp-vm-icon cbp-vm-grid cbp-vm-selected" data-view="cbp-vm-view-grid">Grid View</a>
            <a href="#" class="cbp-vm-icon cbp-vm-list" data-view="cbp-vm-view-list">List View</a>
          </div>
        
          <ul>
            @foreach($az_mast_barang as $barang)
            <li class="">
              <a class="cbp-vm-image size-box text-center" href="#"><img src="{{ asset('image/kalung.png')}}"></a>
              <h3 class="cbp-vm-title text-center">{{$barang->nama_barang}}</h3>
              <div class="cbp-vm-price text-center">Rp. {{$barang->harga_barang}}</div>
              <div class="cbp-vm-details kodede tablethide text-center">
                Kode Barang: {{$barang->kode_barang}}
              </div>
              <div class="cbp-vm-details kodede tablethide text-center">
                Kategori: {{$barang->nama_kategori}}
              </div>
              <div class="cbp-vm-details datete text-center">
                Dibuat Tanggal: {{$barang->dibuat}}
              </div>
              <div class="cbp-vm-details jumjum text-center">
                Jumlah Stock: {{$barang->stok_barang}}
              </div>
              <div class="cbp-vm-details berber text-center">
                Berat: {{$barang->berat_barang}} gr
              </div>
              <div class="cbp-vm-details karat text-center">
                Karat: {{$barang->karat}} karat
              </div>

              <div class="cbp-vm-icon cbp-vm-add text-center">
                  <a class="btn btn-action marginright btn-pencil-list" href="{{url('barang/'.$barang->id.'/edit')}}"><img class="pencil-list" src="{{ asset('image/pencil.png')}}" alt="" ></a>
                  <form method="POST" style="display: inline-block;" action="{{url('/barang/'.$barang->id.'/delete')}}">
                  {{ csrf_field() }}
                  <button class="btn btn-action marginright btn-trash-list" type="submit" name="delete" onclick="return confirm('Are you sure want to delete name {{$barang->nama_barang}}?');"><img class="trash-list" src="{{ asset('image/trash.png')}}" alt=""></button> 
                  <input type="hidden" name="_method" value="DELETE">
                  </form>
                  <a class="btn btn-action marginright" href="">Print Barcode</a>
              </div>
            </li>
            @endforeach
          </ul>
            
        <div style="width: 100%" class="text-left">
          
        <!-- <a class="btn" style="background-color: #449ed8;">Tambah Barang</a> -->
        </div>
        </div>
    </div>
@endsection
@section('script')

@endsection