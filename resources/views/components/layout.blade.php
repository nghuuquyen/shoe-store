<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('asset/img/LogoNAV.png') }}">
    <title>@yield('title', 'TienTuyenShoes')</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap");

        .col {
            width: 95%;
            margin: auto;
        }

        * {
            font-family: "Inter", Courier, monospace;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
</head>
<body class="bg-[#F7F6F3] overflow-x-hidden">

<x-header />

<div class="fixed top-16 z-40 w-full h-7 flex justify-center items-center bg-black">
    <marquee behavior="" direction="" class="space-x-40 text-nowrap">
        <strong class="text-white text-xs">FREE SHIPPING ON ORDERS OVER $50!</strong>
        <strong class="text-white text-xs">EXCITING PROMOTIONS - LIMITED QUANTITIES!</strong>
    </marquee>
</div>
<!-- Main Content -->
<main class="pt-16">
    {{ $slot }}
</main>

<x-footer />

<script>
    function toggleDrawer() {
        const drawer = document.getElementById('drawer');
        const overlay = document.getElementById('overlay');
        drawer.classList.toggle('right-0');
        drawer.classList.toggle('right-[-500px]');
        overlay.classList.toggle('hidden');
        overlay.classList.toggle('opacity-0');
        overlay.classList.toggle('opacity-100');
    }
</script>
@stack('scripts')
</body>
</html>
