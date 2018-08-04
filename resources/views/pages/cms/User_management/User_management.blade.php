@extends('layouts.sidenav')
@section('title')
    <title>Azhapos - User Management</title>
@endsection

@section('head')

@endsection

@section('content')

    <div class="main">
        <h2 class="mobile-size mobilehide" style="color: #aaa;"><strong>Master User Management</strong></h2>
        <h2 class="mobile-size mobileshow" style="color: #aaa;"><strong>User Management</strong></h2>
        <div class="col-sm-12 data-pelanggan">
          <table class="table text-center" id=""  width="100%" cellspacing="0">
              <thead class="text-center" id="">
                <tr >
                    <th class=" text-left">Username</th>
                    <th class="text-center mobilehide-list tabhide-list">Email</th>
                    <th class="text-center mobilehide-list">Group</th>
                    <th class="text-center mobilehide-list">Outlet</th>
                    <th class="text-center mobilehide-list tabhide-list">Akses</th>
                    <th class="text-center mobilehide-list tabhide-list">Superadmin</th>
                    <th class="text-center ">Tindikan</th>
                </tr>
              </thead>

              <tbody class="text-center" id="">
              @foreach($az_user_management as $management)
              <tr>
                <td class=" text-left">{{$management->username}}</td>
                <td class="mobilehide-list tabhide-list" >{{$management->email}}</td>
                <td class="mobilehide-list" >{{$management->usergroup}}</td>
                <td class="mobilehide-list" >{{$management->nama_outlet}}</td>
                <td class="mobilehide-list tabhide-list" >
                  @if ($management->is_active == 1)<?php echo "Active" ?>
                  @else<?php echo "Disable" ?>
                  @endif
                </td>
                <td class="mobilehide-list tabhide-list" >
                  @if ($management->is_superadmin == 1)<?php echo "Ya" ?>
                  @else<?php echo "Tidak" ?>
                  @endif
                </td>
                <td class="">
                  <a class="btn btn-action marginright btn-pencil-list" href="{{url('user_management/'.$management->id.'/edit')}}"><img class="pencil-list" src="{{ asset('image/pencil.png')}}" alt="" ></a>
                  <form method="POST" style="display: inline-block;" action="{{url('/user_management/'.$management->id.'/delete')}}">
                  {{ csrf_field() }}
                  <button class="btn btn-action marginright btn-trash-list" type="submit" name="delete" onclick="return confirm('Are you sure want to delete name {{$management->username}}?');"><img class="trash-list" src="{{ asset('image/trash.png')}}" alt=""></button> 
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