{{-- header part --}}
@include('admin.layouts.inc.header')

{{-- sidebar --}}
@include('admin.layouts.inc.sidebar')

{{-- dynamic content --}}
@yield('page-content')

{{-- footer part --}}
@include('admin.layouts.inc.footer')
