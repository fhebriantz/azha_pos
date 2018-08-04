@extends('layouts.sidenav')
@section('title')
    <title>Azhapos - Pembelian</title>
@endsection

@section('head')
  
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

              <h3 class="matop-80">Transaksi Pembelian</h3>
              <div class="col-sm-12 data-pelanggan" style="padding-right: 30px; padding-left: 0px;">
                <table class="table text-center" id=""  width="100%" cellspacing="0">
                    <thead class="text-center" id="">
                      <tr >
                          <th class="text-center dx1">No.Transaksi</th>
                          <th class="text-center s3 mobilehide-list">Customer</th>
                          <th class="text-center dx5">Tanggal</th>
                          <th class="text-center dx6">Tindakan</th>
                      </tr>
                    </thead>

                    <tbody class="text-center" id="">
                      @foreach($az_trans_pembelian as $trans_beli)
                      {{ csrf_field() }}
                      <tr>
                        <td class="padding-td">{{$trans_beli->id_trans}}</td>
                        <td class="padding-td mobilehide-list">{{$trans_beli->nama_pelanggan}}</td>
                        <td class="padding-td">{{$trans_beli->tgl_transaksi}}</td>
                        <td class="padding-td set-up">
                          <a data-fancybox data-src="#expand{{$trans_beli->id}}" href="javascript:;">
                            <button class="btn btn-margin btn-expand">Detail</button>
                          </a>
                          <a class="btn btn-action marginright btn-pencil-list" href=""><img class="pencil-list" src="{{ asset('image/pencil.png')}}" alt=""></a>
                          <a class="btn btn-action marginright btn-trash-list" href=""><img class="trash-list" src="{{ asset('image/trash.png')}}" alt=""></a>

                          <!-- start popup -->
                            <div class="div-expand" id="expand{{$trans_beli->id}}">
                              <div class="title-popup">
                                <p class="left-popup">Payment With {{$trans_beli->tipe_bayar}}</p>
                                <p class="right-popup">{{$trans_beli->tgl_transaksi}}</p>
                                <p class="kode-popup">No. {{$trans_beli->id_trans}}</p>
                                <p class="price-popup">Rp. 25.000.000</p>
                                <p class="price-disc"><strike>Rp. 25.000.000</strike></p>
                              </div>
                              <div class="detail-popup col-sm-12 botom-detail text-center">
                                <div class="row">                               
                                  <div class="iframe"  scrolling="yes">

                                    <?php $result = App\Http\Controllers\Model\Trans_pembelian::detail_beli($trans_beli->id_trans) ?>
                                    @foreach($result as $detil)
                                    {{ csrf_field() }}

                                    <!-- Start   -->
                                    <div class="kotak-trans">
                                      <table class="marbon table text-center tabel" style="margin-bottom: 10px"  width="100%" cellspacing="0">
                                        <thead>
                                          <tr >
                                              <th class="text-center" style="width: 25%;">Kode Transaksi</th>
                                              <th class="text-center" style="width: 25%">Nama Barang</th>
                                              <th class="text-center" style="width: 25%">Harga</th>
                                              <th class="text-center" style="width: 25%"> </th>
                                          </tr>
                                        </thead>

                                        <tbody id="">
                                          <tr>
                                            <td>{{$detil->id_trans}}</td>
                                            <td>{{$detil->nama_barang}}</td>
                                            <td>Rp. {{$detil->harga_barang}}</td>
                                            <td>
                                              <a class="collapsed" href="#beli{{$trans_beli->id}}-{{$detil->id}}" id="more" data-toggle="collapse">
                                                <span class="if-collapsed">BUKA</span>
                                                <span class="if-not-collapsed">TUTUP</span>
                                              </a>
                                            </td>
                                          </tr>
                                        </tbody>
                                    </table>
                                    <div id="beli{{$trans_beli->id}}-{{$detil->id}}" class="collapse">
                                      <div class="bungkus-detail" style="margin-bottom: 1rem">
                                        <div class="isi-detail">
                                          <div class="row">
                                            <div class="col-sm-6">
                                              <div class="det-kode mabot-detail">
                                                <div><strong>Kode Barang</strong></div>
                                                <div>{{$detil->kode_barang}}</div>  
                                              </div>
                                              <div class="det-berat mabot-detail">
                                                <div><strong>Berat Barang</strong></div>
                                                <div>{{$detil->berat_barang}}gr</div>
                                              </div>
                                              <div class="det-karat mabot-detail">
                                                <div><strong>Kadar Karat</strong></div>
                                                <div>{{$detil->karat_barang}} Karat</div>
                                              </div>
                                              <div class="det-karat mabot-detail">
                                                <div><strong>Jumlah</strong></div>
                                                <div>{{$detil->jumlah_barang}}</div>
                                              </div>
                                              <div class="det-karat mabot-detail">
                                                <div><strong>Sisa Barang</strong></div>
                                                <div>19</div>
                                              </div>
                                            </div>   
                                            <div class="col-sm-6">
                                              <div class="det-kode mabot-detail">
                                                <div><strong>Tanggal Transaksi</strong></div>
                                                <div>{{$trans_beli->tgl_transaksi}}</div>  
                                              </div>
                                              <div class="det-berat mabot-detail">
                                                <div><strong>Nama Customer</strong></div>
                                                <div>{{$trans_beli->nama_pelanggan}}</div>
                                              </div>
                                              <div class="det-kode mabot-detail">
                                                <div><strong>Tipe Pembayaran</strong></div>
                                                <div style="color: rgb(68, 158, 216)"><strong>{{$trans_beli->tipe_bayar}}</strong></div>  
                                              </div>
                                              <div class="det-berat mabot-detail">
                                                <div><strong>Diskon</strong></div>
                                                <div>{{$detil->diskon}}%</div>
                                              </div>
                                              <div class="det-karat mabot-detail">
                                                <div><strong>Keterangan</strong></div>
                                                <div>{{$detil->keterangan}}</div>
                                              </div>
                                            </div>                                         
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    </div>
                                    <!-- End   -->
                                    @endforeach
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
                      @endforeach
                    </tbody>
                </table>
              </div>
    </div>
@endsection
@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection