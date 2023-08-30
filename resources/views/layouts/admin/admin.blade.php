@include('layouts.header')
@include('layouts.admin.admin-navbar')

{{ $slot }}

@include('layouts.admin.admin-footer-content')
@include('layouts.footer-end')