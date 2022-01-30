
 {{-- start header --}}
  @include('client_layout.header')
  {{-- end header --}}
 

  {{-- start navbar --}}
  @include('client_layout.navbar')
  {{-- end navbar --}}

    {{-- start content --}}
    @yield('content')
    {{-- end content --}}

    {{-- start footer --}}
    @include('client_layout.footer')
    {{-- end footer --}}