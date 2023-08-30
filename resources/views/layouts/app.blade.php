@include('layouts.header')
@include('layouts.navbar')

{{ $slot }}

@include('layouts.footer-content')
@include('layouts.footer-end')
