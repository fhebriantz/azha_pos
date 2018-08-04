@extends('layouts.sidenav')
@section('title')
    <title>Azhapos - kategori</title>
@endsection

@section('head')

@endsection

@section('content')

    <div class="main">
        <h2 class="mobile-size mobilehide" style="color: #aaa;"><strong>Master Data kategori</strong></h2>
        <h2 class="mobile-size mobileshow" style="color: #aaa;"><strong>Master kategori</strong></h2>
        
        <div class="col-sm-12">
          <div class="row">
            @foreach($az_mast_kategori as $kategori)
            <div class="col-md-6 col-lg-4 padding-30">
              <div class="square-box border-product padding-isi">
                <div class="sadada" style="color: #777">
                  Kode kategori:<br>
                  {{$kategori->id}}<br>
                  <br>
                  Nama kategori:<br>
                  {{$kategori->nama_kategori}}<br>
                  <br>
                  Inisial:<br>
                  {{$kategori->initial}}<br>
                  <br>
                  Deskripsi:<br>
                  {{$kategori->deskripsi}}<br>
                </div>
                <div style="margin-top: 15px" style="width: 100%">
                  <a class="btn btn-action marginright btn-pencil-list" href="{{url('kategori/'.$kategori->id.'/edit')}}"><img class="pencil-list" src="{{ asset('image/pencil.png')}}" alt="" ></a>
                  <form method="POST" style="display: inline-block;" action="{{url('/kategori/'.$kategori->id.'/delete')}}">
                  {{ csrf_field() }}
                  <button class="btn btn-action marginright btn-trash-list" type="submit" name="delete" onclick="return confirm('Are you sure want to delete name {{$kategori->nama_kategori}}?');"><img class="trash-list" src="{{ asset('image/trash.png')}}" alt=""></button> 
                  <input type="hidden" name="_method" value="DELETE">
                  </form>
                  <a class="btn btn-action marginright" href="">Print Barcode</a>
                </div>   
              </div>        
            </div>

            @endforeach
          </div>
        </div>
    </div>
@endsection
@section('script')

@endsection