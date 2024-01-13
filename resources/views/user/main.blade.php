<!DOCTYPE html>
<html lang="en">
<head>
    @include('user.parts.link')
</head>
<body>
    <header>
        @include('user.parts.header')
    </header>
    {{-- content --}}
    @yield('content')
    {{-- content --}}
    <footer>
        @include('user.parts.footer')
    </footer>
    @include('user.parts.scripts')
</body>
</html>