@extends('layouts.index')
@section('title')
    <title>Azhapos - List Barang</title>
@endsection

@section('head')
@endsection

@section('content')
		<div class="main-index" id="main-index">
			<div class="container">	
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-4 bungkus-row">
							<div class="row-index">
								<div class="image-index text-center">
									<div class="image-height">
										<img class="imgsize-index" src="{{ asset('image/cash.png')}}" alt="">
									</div>
									<p class="title-index">Cash Management</p>
								</div>
								<div class="index-p">
									Sangat praktis dan mudah digunakan oleh staf kasir Anda. Proses setup awal cepat, hanya dalam beberapa menit Anda sudah bisa berjualan dan menggunakan Azhapos sebagai mesin kasir.
								</div>
							</div>
							<div class="learn text-center">
								<a href="" class="btn btn-outline-info showmore">Pelajari Lebih Lanjut</a>
							</div>
						</div>
						<div class="col-sm-4 bungkus-row">
							<div class="row-index">
								<div class="image-index text-center">
									<div class="image-height">
										<img class="imgsize-index" src="{{ asset('image/boxed.png')}}" alt="">
									</div>
									<p class="title-index">Inventory</p>
								</div>
								<div class="index-p">
									Dengan sistem kasir Azhapos, Anda dapat menambah stok, melakukan transfer stok antar cabang, mengirim PO ke supplier hingga melakukan stok opname rutin.
								</div>
							</div>
							<div class="learn text-center">
								<a href="" class="btn showmore btn-outline-info">Pelajari Lebih Lanjut</a>
							</div>
						</div>
						<div class="col-sm-4 bungkus-row">
							<div class="row-index">
								<div class="image-index text-center">
									<div class="image-height">
										<img class="imgsize-index" src="{{ asset('image/zoom.png')}}" alt="">
									</div>
									<p class="title-index">Report & Analytics</p>
								</div>
								<div class="index-p">
									Anda dapat mengakses seluruh laporan penjualan secara real-time dari smartphone, tablet maupun komputer. Kapanpun dan dimanapun!
								</div>
							</div>
							<div class="learn text-center">
								<a href="" class="btn showmore btn-outline-info">Pelajari Lebih Lanjut</a>
							</div>
						</div>
						<div class="col-sm-4 bungkus-row">
							<div class="row-index">
								<div class="image-index text-center">
									<div class="image-height">
										<img class="imgsize-index" src="{{ asset('image/troli.png')}}" alt="">
									</div>
									<p class="title-index">Point Of Sales</p>
								</div>
								<div class="index-p">
									Untuk meningkatkan keamanan bisnis Anda, semua staf/kasir dapat menggunakan aplikasi Pawoon dengan hak akses yang dapat Anda atur sendiri sesuai dengan kebutuhan masing-masing staf/kasir.
								</div>
							</div>
							<div class="learn text-center">
								<a href="" class="btn btn-outline-info showmore">Pelajari Lebih Lanjut</a>
							</div>
						</div>
						<div class="col-sm-4 bungkus-row">
							<div class="row-index">
								<div class="image-index text-center">
									<div class="image-height">
										<img class="imgsize-index" src="{{ asset('image/gembok.png')}}" alt="">
									</div>
									<p class="title-index">Keamanan</p>
								</div>
								<div class="index-p">
									Untuk meningkatkan keamanan bisnis Anda, semua staf/kasir dapat menggunakan aplikasi Pawoon dengan hak akses yang dapat Anda atur sendiri sesuai dengan kebutuhan masing-masing staf/kasir.
								</div>
							</div>
							<div class="learn text-center">
								<a href="" class="btn btn-outline-info showmore">Pelajari Lebih Lanjut</a>
							</div>
						</div>
						<div class="col-sm-4 bungkus-row">
							<div class="row-index">
								<div class="image-index text-center">
									<div class="image-height">
										<img class="imgsize-index" src="{{ asset('image/connect.png')}}" alt="">
									</div>
									<p class="title-index">Manajemen Karyawan</p>
								</div>
								<div class="index-p">
									Anda dapat mengakses seluruh laporan penjualan secara real-time dari smartphone, tablet maupun komputer. Kapanpun dan dimanapun!
								</div>
							</div>
							<div class="learn text-center">
								<a href="" class="btn btn-outline-info showmore">Pelajari Lebih Lanjut</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection
@section('script')

@endsection