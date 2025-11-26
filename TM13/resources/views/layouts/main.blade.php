<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Blank Page') - GXON</title>
    
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200..800&display=swap" rel="stylesheet">
    
    <!-- Required CSS -->
    <link rel="stylesheet" href="{{ asset('assets/libs/flaticon/css/all/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/lucide/lucide.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/simplebar/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/node-waves/waves.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-select/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>
<body>
    <div class="page-layout">
        
        @include('layouts.header')
        
        @include('layouts.sidebar')
        
        <main class="app-wrapper">
            <div class="container">
                @yield('content')
            </div>
        </main>
        
        @include('layouts.footer')
        
    </div>
    
    <!-- Required JS -->
    <script src="{{ asset('assets/libs/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/js/appSettings.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>