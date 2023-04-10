<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="/css/app.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="76x76" href="{{ asset('src') }}/logo/logo-unira.png">

    <title>Sistem Informasi Akademik | UNIRA</title>

    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
</head>

<body class="bg-putih">

    @if (Auth::check())
        @include('komponen/menu')
    @endif
    @include('komponen/pesan')

    @yield('konten')

    @section('scripts')
        <script src="../path/to/flowbite/dist/flowbite.js"></script>
        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    </body>

    </html>
