<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'پنل مدیریت')</title>

    {{-- فونت وزیر از گوگل فونت --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    {{-- استایل اصلی --}}
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">

    @stack('styles')
</head>
<body>

    {{-- هدر --}}
    @include('admin.layouts.header')

    <div class="layout-wrapper">
        {{-- سایدبار --}}
        @include('admin.layouts.sidebar')

        {{-- محتوای اصلی --}}
        <main class="main-content" id="mainContent">
            <div class="page-content">
                @yield('content')
            </div>

            {{-- فوتر --}}
            @include('admin.layouts.footer')
        </main>
    </div>

    {{-- jQuery از CDN --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    {{-- اسکریپت اصلی --}}
    <script src="{{ asset('admin/js/admin.js') }}"></script>

    @stack('scripts')
</body>
</html>
