<!DOCTYPE html>
<html>
  <head>
    @yield('title')

    @include('include_login/head')

    @yield('head')
  </head>

  <body>

    @include('include_login/nav')

    @yield('content')

  </body>
  @include('include_login/script')
  
  @yield('script')
</html>