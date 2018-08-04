@extends('layouts.sidenav')
@section('title')
    <title>Azhapos - Pelanggan</title>
@endsection

@section('head')

@endsection

@section('content')
    <div class="main">
        <h2 class="mobile-size mobilehide" style="color: #aaa;"><strong>Master Data Pelanggan</strong></h2>
        <h2 class="mobile-size mobileshow" style="color: #aaa;"><strong>Master Pelanggan</strong></h2>
        <div class="col-sm-12 data-pelanggan" style="padding-right: 30px; padding-left: 0px;">
          <table class="table text-center" id=""  width="100%" cellspacing="0" >
              <thead class="text-center" id="">
                <tr >
                    <th class="text-left mobilehide-list tabhide-list" >ID</th>
                    <th class="text-left">Nama</th>
                    <th class="text-left">Alamat</th>
                    <th class="text-center mobilehide-list tabhide-list" >Email</th>
                    <th class="text-center mobilehide-list tabhide-list" >Tanggal Lahir</th>
                    <th class="text-center mobilehide-list" >No.HP</th>
                    <th class="text-center">Tindakan</th>
                </tr>
              </thead>

              <tbody class="text-center" id="">
                @foreach($az_mast_pelanggan as $pelanggan)
                {{ csrf_field() }}
                <tr>
                  <td class="text-left mobilehide-list tabhide-list">{{$pelanggan->id}}</td>
                  <td class="text-left">{{$pelanggan->nama_pelanggan}}</td>
                  <td class="text-left">{{$pelanggan->alamat}}</td>
                  <td class="mobilehide-list tabhide-list">{{$pelanggan->email}}</td>
                  <td class="mobilehide-list tabhide-list">{{$pelanggan->tgl_lahir}}</td>
                  <td class="mobilehide-list">{{$pelanggan->handphone}}</td>
                  <td>
                    <a class="btn btn-action marginright btn-pencil-list" href="{{url('pelanggan/'.$pelanggan->id.'/edit')}}"><img class="pencil-list" src="{{ asset('image/pencil.png')}}" alt="" ></a>
                    <form method="POST" style="display: inline-block;" action="{{url('/pelanggan/'.$pelanggan->id.'/delete')}}">
                    {{ csrf_field() }}
                    <button class="btn btn-action marginright btn-trash-list" type="submit" name="delete" onclick="return confirm('Are you sure want to delete name {{$pelanggan->nama_pelanggan}}?');"><img class="trash-list" src="{{ asset('image/trash.png')}}" alt=""></button> 
                    <input type="hidden" name="_method" value="DELETE">
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
          </table>
        </div>
    </div>
@endsection
@section('script')

@endsection