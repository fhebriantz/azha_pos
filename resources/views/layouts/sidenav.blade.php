<!DOCTYPE html>
<html>
  <head>
    @yield('title')

    @include('include_sidenav/head')

    @yield('head')
  </head>

  <body>
    <!-- nav MOBIle -->

    @include('include_sidenav/nav')

    @yield('content')

  </body>
  @include('include_sidenav/script')
  
  @yield('script')
</html>