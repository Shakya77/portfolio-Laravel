<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bijan Shakya - Portfolio</title>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    @vite('resources/css/app.css')
</head>

<body>
    {{-- Header or Navbar --}}
    @include('layouts.navbar')

    {{-- Hero Section --}}
    @include('herosection')

    {{-- About me section --}}
    @include('aboutme')

    {{-- Resume section --}}
    @include('resume-section')

    {{-- My services section --}}
    @include('services-section')
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    @stack('scripts')
</body>

</html>
