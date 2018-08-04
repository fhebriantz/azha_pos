@extends('layouts.sidenav')
@section('title')
    <title>Azhapos - Outlet</title>
@endsection

@section('head')

@endsection

@section('content')
    <div class="main">
        <h2 class="mobile-size mobilehide" style="color: #aaa;"><strong>Master Data Outlet</strong></h2>
        <h2 class="mobile-size mobileshow" style="color: #aaa;"><strong>Master Outlet</strong></h2>
        <div class="col-sm-12 data-pelanggan">
          <table class="table text-center" id=""  width="100%" cellspacing="0">
              <thead class="text-center" id="">
                <tr >
                    <th class="text-left">Lokasi Outlet</th>
                    <th class="text-center">Kode Outlet</th>
                    <th class="text-center">Nama Outlet</th>
                    <th class="text-center">Tindakan</th>
                </tr>
              </thead>

              <tbody class="text-center" id="">
              @foreach($az_mast_outlet as $outlet)
              <tr>
                <td class="text-left">{{$outlet->lokasi_outlet}}</td>
                <td>{{$outlet->id}}</td>
                <td>{{$outlet->nama_outlet}}</td>
                <td>
                  <a class="btn btn-action marginright btn-pencil-list" href="{{url('outlet/'.$outlet->id.'/edit')}}"><img class="pencil-list" src="{{ asset('image/pencil.png')}}" alt="" ></a>
                  <form method="POST" style="display: inline-block;" action="{{url('/outlet/'.$outlet->id.'/delete')}}">
                  {{ csrf_field() }}
                  <button class="btn btn-action marginright btn-trash-list" type="submit" name="delete" onclick="return confirm('Are you sure want to delete name {{$outlet->nama_outlet}}?');"><img class="trash-list" src="{{ asset('image/trash.png')}}" alt=""></button> 
                  <input type="hidden" name="_method" value="DELETE">
                  </form>
                </td>
              </tr>
              </tbody>
              @endforeach
          </table>
        </div>
    </div>
@endsection
@section('script')

@endsection