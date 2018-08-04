<!DOCTYPE html>
<html>
  <head>
    @yield('title')

    @include('include_index/head')

    @yield('head')
  </head>

  <body>

    @include('include_index/nav')
    @include('include_index/header')

    @yield('content')

    @include('include_index/footer')

  </body>
  @include('include_index/script')
  
  @yield('script')
</html>