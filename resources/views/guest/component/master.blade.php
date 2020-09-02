
@include('guest.component.head')

<body>
    
  @include('guest.component.navbar')

  @yield('content')

  @include('guest.component.footer')

  @include('guest.component.script')

</body>

</html>