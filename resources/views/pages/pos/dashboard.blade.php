@extends('layouts.sidenav')
@section('title')
    <title>Azhapos - List Barang</title>
@endsection

@section('head')
@endsection

@section('content')
    <div class="main">
        <h1 class="title-size">Dashboard Panel</h1>
		  	<div class="col-sm-12">
		  		<div class="row">
		  			<div class="col-md-6 col-lg-12 col-xl-6 matop-mobile">
				  		<div class="row">
				  			<div class="col-md-12 col-lg-6">
				  				<strong class="sub-menu dashmen">Target Penjualan Bulan Ini</strong> 
				  				<img src="{{ asset('image/pie1.png')}}" width="100%" alt="">
				  			</div>
				  			<div class="col-md-12 col-lg-6">
				  				<strong class="sub-menu dashmen">Kenaikan Konsumen Bulan Ini</strong> 
				  				<img src="{{ asset('image/pie2.png')}}" width="100%" alt="">
				  			</div>
				  		</div>
				  	</div>
				  	<div class="col-md-6 col-lg-12 col-xl-6 matop-mobile">
				  		<div class="row">
				  			<div class="col-md-12 col-lg-4">
				  				<div class="spacing-d1">
				  					<strong class="sub-menu dashmen">Total Transaksi Bulan ini</strong>
				  				</div>
				  				<div class="d1" style="color: #1b9b7d;" ><strong>1076</strong></div>
				  			</div>
				  			<div class="col-md-12 col-lg-4">
				  				<div class="spacing-d1">
				  					<strong class="sub-menu dashmen">Total Pelanggan</strong> 
				  				</div>
				  				<div class="d1" style="color: #1b9b7d;" ><strong>1930</strong></div>
				  			</div>
				  			<div class="col-md-12 col-lg-4">
				  				<div class="spacing-d1">
				  					<strong class="sub-menu dashmen">Total Transaksi Bulan ini</strong>
				  				</div>
				  				<div class="d3" style="color: #1b9b7d;" ><strong>128.000.000</strong></div>
				  			</div>
				  		</div>
				  	</div>
				  	<div class="col-md-12 col-lg-6 matop-mobile">
				  		<strong class="sub-menu dashmen">Chart Penjualan 1 Bulan Terakhir</strong>
				  		<img src="{{ asset('image/diagram1.png')}}" width="100%" alt="">
				  	</div>
				  	<div class="col-md-12 col-lg-6">
				  		<strong class="sub-menu dashmen">Chart Stok Barang 1 Bulan Terakhir</strong>
				  		<img src="{{ asset('image/diagram2.png')}}" width="100%" alt="">
				  	</div>
		  		</div>
		  	</div>
    </div>
@endsection
@section('script')

@endsection