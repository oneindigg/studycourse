@include('backend.layouts.header')
@include('backend.layouts.navbar')
@include('backend.layouts.sidebar')
@include('backend.layouts.flash-message')


@yield('content')
@include('backend.layouts.footer')