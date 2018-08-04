@extends('layouts.sidenav')
@section('title')
    <title>Azhapos - Pegawai</title>
@endsection

@section('head')

@endsection

@section('content')
    <div class="main">
        <h2 class="mobile-size mobilehide" style="color: #aaa;"><strong>Master Data Pegawai</strong></h2>
        <h2 class="mobile-size mobileshow" style="color: #aaa;"><strong>Master Pegawai</strong></h2>
        <div class="col-sm-12 data-pelanggan" style="padding-right: 30px; padding-left: 0px;">
          <table class="table text-center" id=""  width="100%" cellspacing="0">
              <thead class="text-center" id="">
                <tr >
                  <th class="mobilehide-list" style="width: 5%">Kode</th>
                    <th class="widthpeg1">Nama</th>
                    <th class="widthpeg2">Alamat</th>
                    <th class="mobilehide-list tabhide-list" style="width: 20%">Email</th>
                    <th class="mobilehide-list tabhide-list" style="width: 15%">Tanggal Lahir</th>
                    <th class="mobilehide-list">No.HP</th>
                    <th class="widthpeg4 text-center">Tindakan</th>
                </tr>
              </thead>

              <tbody class="text-center" id="">
                @foreach($az_mast_pegawai as $pegawai)
                <tr>
                  <td class="mobilehide-list">{{$pegawai->id}}</td>
                  <td  class="text-left">{{$pegawai->nama_pegawai}}</td>
                  <td class="text-left">{{$pegawai->alamat}}</td>
                  <td class="mobilehide-list tabhide-list">{{$pegawai->email}}</td>
                  <td class="mobilehide-list tabhide-list">{{$pegawai->tgl_lahir}}</td>
                  <td class="mobilehide-list">{{$pegawai->handphone}}</td>
                  <td>
                    <a class="btn btn-action marginright btn-pencil-list" href="{{url('pegawai/'.$pegawai->id.'/edit')}}"><img class="pencil-list" src="{{ asset('image/pencil.png')}}" alt="" ></a>
                    <form method="POST" style="display: inline-block;" action="{{url('/pegawai/'.$pegawai->id.'/delete')}}">
                    {{ csrf_field() }}
                    <button class="btn btn-action marginright btn-trash-list" type="submit" name="delete" onclick="return confirm('Are you sure want to delete name {{$pegawai->nama_pegawai}}?');"><img class="trash-list" src="{{ asset('image/trash.png')}}" alt=""></button> 
                    <input type="hidden" name="_method" value="DELETE">
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
          </table>
        </div>
    </div>
    <!-- <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <button class="btn invisible" id="backButton">< Back</button> -->
  </body>
@endsection
@section('script')

@endsection