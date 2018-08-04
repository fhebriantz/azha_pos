@extends('layouts.sidenav')
@section('title')
    <title>Azhapos - User Group</title>
@endsection

@section('head')

@endsection

@section('content')

    <div class="main">
        <h2 class="mobile-size mobilehide" style="color: #aaa;"><strong>Master User Group</strong></h2>
        <h2 class="mobile-size mobileshow" style="color: #aaa;"><strong>User Group</strong></h2>
        <div class="col-sm-12 data-pelanggan">
          <table class="table text-center" id=""  width="100%" cellspacing="0">
              <thead class="text-center" id="">
                <tr >
                    <th class="text-left">User Group</th>
                    <th class="text-center ">Is Active</th>
                    <th class="text-center ">Deskripsi</th>
                    <th class="text-center ">Tindakan</th>
                </tr>
              </thead>

              <tbody class="text-center" id="">
              @foreach($az_user_group as $group)
              <tr>
                <td class="text-left">{{$group->usergroup}}</td>
                <td>
                  @if ($group->is_active == 1)<?php echo "Active" ?>
                  @else<?php echo "Disable" ?>
                  @endif
                </td>
                <td>{{$group->description}}</td>
                <td>
                  <a class="btn btn-action marginright btn-pencil-list" href="{{url('user_group/'.$group->id.'/edit')}}"><img class="pencil-list" src="{{ asset('image/pencil.png')}}" alt="" ></a>
                  <form method="POST" style="display: inline-block;" action="{{url('/user_group/'.$group->id.'/delete')}}">
                  {{ csrf_field() }}
                  <button class="btn btn-action marginright btn-trash-list" type="submit" name="delete" onclick="return confirm('Are you sure want to delete name {{$group->nama_group}}?');"><img class="trash-list" src="{{ asset('image/trash.png')}}" alt=""></button> 
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