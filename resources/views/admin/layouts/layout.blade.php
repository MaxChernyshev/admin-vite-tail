<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title> Admin Dashboard Template </title>
    @vite([
                'resources/css/admin/style.css',
                'resources/css/admin/satoshi.css',
                'resources/css/admin/simple-datatables.css',

                'resources/js/admin/index.js',
                'resources/js/admin/us-aes-en.js',
                'resources/js/admin/components/*.js',
    ])
</head>

<body
    x-data="{ page: 'ecommerce', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
    x-init=" darkMode = JSON.parse(localStorage.getItem('darkMode')); $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'dark text-bodydark bg-boxdark-2': darkMode === true}">
<!-- ===== Preloader Start ===== -->
{{--<include src="./partials/preloader.html"></include>--}}
<!-- ===== Preloader End ===== -->

<!-- ===== Page Wrapper Start ===== -->
<div class="flex h-screen overflow-hidden">
    <!-- ===== Sidebar Start ===== -->
    @include('admin.layouts.sidebar')
    <!-- ===== Sidebar End ===== -->

    <!-- ===== Content Area Start ===== -->
    <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
        <!-- ===== Header Start ===== -->
        @include('admin.layouts.header')
        <!-- ===== Header End ===== -->

        <!-- ===== Main Content Start ===== -->
        @yield('content')
        <!-- ===== Main Content End ===== -->
    </div>
    <!-- ===== Content Area End ===== -->
</div>
<!-- ===== Page Wrapper End ===== -->
</body>
