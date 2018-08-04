@extends('layouts.sidenav')
@section('title')
    <title>Azhapos - Penjualan</title>
@endsection

@section('head')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@endsection

@section('content')
    <div class="main maen">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-11">
                <div class="row">
                  
                  <div class="col-sm-4 col-xs-4">
                    <div class="row pad-30">
                      <a  class="btn btn-trans" href="{{url('/penjualan')}}">
                        <span class="mobilehide">Transaksi Penjualan</span>
                        <span class="mobileshow">Penjualan</span>
                      </a>
                    </div>
                  </div>
                  <div class="col-sm-4 col-xs-4">
                    <div class="row pad-30">
                      <a class="btn  btn-trans" href="{{url('/pembelian')}}">
                        <span class="mobilehide">Transaksi Pembelian</span>
                        <span class="mobileshow">Pembelian</span>
                      </a>
                    </div>
                  </div>
                  <div class="col-sm-4 col-xs-4">
                    <div class="row pad-30">
                      <a class="btn  btn-trans" href="{{url('/pemesanan')}}">
                        <span class="mobilehide">Transaksi Pemesanan</span>
                        <span class="mobileshow">Pemesanan</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

              <h3 class="matop-80">Transaksi Penjualan</h3>
              <div class="col-sm-12 data-pelanggan" style="padding-right: 30px; padding-left: 0px;">
                <table class="table text-center" id=""  width="100%" cellspacing="0">
                    <thead class="text-center" id="">
                      <tr >
                          <th class="text-center dx1 mobilehide-list">No.Transaksi</th>
                          <th class="text-center dx2">Barang</th>
                          <th class="text-center dx3 mobilehide-list tabhide-list">Kode</th>
                          <th class="text-center s1 mobilehide-list tabhide-list">Berat</th>
                          <th class="text-center s2 mobilehide-list tabhide-list">Karat</th>
                          <th class="text-center dx4 hide-list">Harga</th>
                          <th class="text-center s3 mobilehide-list tabhide-list">Customer</th>
                          <th class="text-center dx5">Tanggal</th>
                          <th class="text-center dx6">Tindakan</th>
                      </tr>
                    </thead>
                    
                    <tbody class="text-center" id="">
                      <tr>
                        <td class="padding-td mobilehide-list">0001</td>
                        <td class="padding-td">Cincin Berlian</td>
                        <td class="padding-td mobilehide-list tabhide-list">1512</td>
                        <td class="padding-td mobilehide-list tabhide-list">200gr</td>
                        <td class="padding-td mobilehide-list tabhide-list">24</td>
                        <td class="padding-td hide-list">Rp. 25.000.000</td>
                        <td class="padding-td mobilehide-list tabhide-list">Samsudin</td>
                        <td class="padding-td">25 Februari 2018</td>
                        <td class="padding-td set-up">
                          <a data-fancybox data-src="#expand1" href="javascript:;">
                            <button class="btn btn-margin btn-expand">Detail</button>
                          </a>
                          <a class="btn btn-action marginright btn-pencil-list" href=""><img class="pencil-list" src="{{ asset('image/pencil.png')}}" alt=""></a>
                          <a class="btn btn-action marginright btn-trash-list" href=""><img class="trash-list" src="{{ asset('image/trash.png')}}" alt=""></a>

                          <!-- start popup -->
                            <div class="div-expand" id="expand1">
                              <div class="title-popup">
                                <p class="left-popup">Payment With Detail</p>
                                <p class="right-popup">25 Februari 2018</p>
                                <p class="kode-popup">No. 0001</p>
                                <p class="price-popup">Rp. 25.000.000</p>
                                <p class="price-disc"><strike>Rp. 25.000.000</strike></p>
                              </div>
                              <div class="detail-popup col-sm-12 botom-detail text-center">
                                <div class="row">                               
                                  <div class="iframe"  scrolling="yes">
                                    <!-- Start   -->
                                    <div class="kotak-trans">
                                      <table class="marbon table text-center tabel" style="margin-bottom: 10px"  width="100%" cellspacing="0">
                                        <thead>
                                          <tr >
                                              <th class="text-center" style="width: 25%;">No Transaksi</th>
                                              <th class="text-center" style="width: 25%">Nama Barang</th>
                                              <th class="text-center" style="width: 25%">Harga</th>
                                              <th class="text-center" style="width: 25%"> </th>
                                          </tr>
                                        </thead>

                                        <tbody id="">
                                          <tr>
                                            <td>A0001</td>
                                            <td>Emas Batangan</td>
                                            <td>Rp. 5.000.000</td>
                                            <td>
                                              <a class="collapsed" href="#jual1-1" id="more" data-toggle="collapse">
                                                <span class="if-collapsed">BUKA</span>
                                                <span class="if-not-collapsed">TUTUP</span>
                                              </a>
                                            </td>
                                          </tr>
                                        </tbody>
                                    </table>
                                    <div id="jual1-1" class="collapse">
                                      <div class="bungkus-detail" style="margin-bottom: 1rem">
                                        <div class="isi-detail">
                                          <div class="row">
                                            <div class="col-sm-6">
                                              <div class="det-kode mabot-detail">
                                                <div><strong>Kode Barang</strong></div>
                                                <div>1511</div>  
                                              </div>
                                              <div class="det-berat mabot-detail">
                                                <div><strong>Berat Barang</strong></div>
                                                <div>200gr</div>
                                              </div>
                                              <div class="det-karat mabot-detail">
                                                <div><strong>Kadar Karat</strong></div>
                                                <div>24 Karat</div>
                                              </div>
                                              <div class="det-karat mabot-detail">
                                                <div><strong>Jumlah</strong></div>
                                                <div>1</div>
                                              </div>
                                              <div class="det-karat mabot-detail">
                                                <div><strong>Sisa Barang</strong></div>
                                                <div>19</div>
                                              </div>
                                            </div>   
                                            <div class="col-sm-6">
                                              <div class="det-kode mabot-detail">
                                                <div><strong>Tanggal Transaksi</strong></div>
                                                <div>25 Februari 2018</div>  
                                              </div>
                                              <div class="det-berat mabot-detail">
                                                <div><strong>Nama Customer</strong></div>
                                                <div>Samsudin</div>
                                              </div>
                                              <div class="det-kode mabot-detail">
                                                <div><strong>Tipe Pembayaran</strong></div>
                                                <div style="color: rgb(68, 158, 216)"><strong>Debit</strong></div>  
                                              </div>
                                              <div class="det-berat mabot-detail">
                                                <div><strong>Diskon</strong></div>
                                                <div>10%</div>
                                              </div>
                                              <div class="det-karat mabot-detail">
                                                <div><strong>Keterangan</strong></div>
                                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                                              </div>
                                            </div>                                         
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    </div>
                                    <!-- End   -->

                                    <!-- Start   -->
                                    <div class="kotak-trans">
                                      <table class="table text-center tabel"  width="100%" cellspacing="0">
                                        <thead>
                                          <tr >
                                              <th class="text-center" style="width: 25%;">No Transaksi</th>
                                              <th class="text-center" style="width: 25%">Nama Barang</th>
                                              <th class="text-center" style="width: 25%">Harga</th>
                                              <th class="text-center" style="width: 25%"> </th>
                                          </tr>
                                        </thead>

                                        <tbody id="">
                                          <tr>
                                            <td>A0002</td>
                                            <td>Emas Kiloan</td>
                                            <td>Rp. 8.000.000</td>
                                            <td>
                                              <a class="collapsed" href="#jual1-2" id="more" data-toggle="collapse">
                                                <span class="if-collapsed">BUKA</span>
                                                <span class="if-not-collapsed">TUTUP</span>
                                              </a>
                                            </td>
                                          </tr>
                                        </tbody>
                                    </table>
                                    <div id="jual1-2" class="collapse">
                                      <div class="bungkus-detail" style="margin-bottom: 1rem">
                                        <div class="isi-detail">
                                          <div class="row">
                                            <div class="col-sm-6">
                                              <div class="det-kode mabot-detail">
                                                <div><strong>Kode Barang</strong></div>
                                                <div>1511</div>  
                                              </div>
                                              <div class="det-berat mabot-detail">
                                                <div><strong>Berat Barang</strong></div>
                                                <div>200gr</div>
                                              </div>
                                              <div class="det-karat mabot-detail">
                                                <div><strong>Kadar Karat</strong></div>
                                                <div>24 Karat</div>
                                              </div>
                                              <div class="det-karat mabot-detail">
                                                <div><strong>Jumlah</strong></div>
                                                <div>1</div>
                                              </div>
                                              <div class="det-karat mabot-detail">
                                                <div><strong>Sisa Barang</strong></div>
                                                <div>19</div>
                                              </div>
                                            </div>   
                                            <div class="col-sm-6">
                                              <div class="det-kode mabot-detail">
                                                <div><strong>Tanggal Transaksi</strong></div>
                                                <div>25 Februari 2018</div>  
                                              </div>
                                              <div class="det-berat mabot-detail">
                                                <div><strong>Nama Customer</strong></div>
                                                <div>Samsudin</div>
                                              </div>
                                              <div class="det-kode mabot-detail">
                                                <div><strong>Tipe Pembayaran</strong></div>
                                                <div style="color: rgb(68, 158, 216)"><strong>Debit</strong></div>  
                                              </div>
                                              <div class="det-berat mabot-detail">
                                                <div><strong>Diskon</strong></div>
                                                <div>10%</div>
                                              </div>
                                              <div class="det-karat mabot-detail">
                                                <div><strong>Keterangan</strong></div>
                                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                                              </div>
                                            </div>                                         
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    </div>
                                    <!-- End   -->
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-12" style="margin-top: 20px;">
                                <div class="row">
                                   <a class="btn  text-center btn-margin btn-icon-detail text-left" href=""><img class="icon-detail" src="{{ asset('image/trash.png')}}" alt="">Delete</a>
                                </div>
                              </div>
                            </div>
                            <!-- <a class="btn btn-danger" onclick="$.fancybox.close()">Batal</a> -->
                          <!-- end popup -->
                        </td>
                      </tr>
                    </tbody>
                </table>
              </div>
    </div>
@endsection
@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection