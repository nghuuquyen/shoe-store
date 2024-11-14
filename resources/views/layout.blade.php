<!-- resources/views/layout.blade.php -->
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
<!-- NAV -->
<header class="bg-white fixed top-0 w-full z-50 shadow-sm">
    <div class="col flex justify-between items-center h-16">
        <a href="{{ url('/') }}">
            <img src="{{ asset('asset/img/LogoNAV.png') }}" alt="Logo" class="h-16 w-16 object-cover">
        </a>
        <nav class="flex text-sm font-bold max-sm:hidden">
            <a href="{{ url('/women') }}" class="p-5 hover:underline underline-offset-4 focus:underline">WOMAN</a>
            <a href="{{ url('/man') }}" class="p-5 hover:underline underline-offset-4 focus:underline">MAN</a>
            <a href="{{ url('/newarrivals') }}" class="p-5 hover:underline underline-offset-4 focus:underline">NEW ARRIVALS</a>
            <a href="{{ url('/contact') }}" class="p-5 hover:underline underline-offset-4 focus:underline">CONTACT</a>
        </nav>
        <!-- CART -->
        <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden transition-opacity duration-1000 ease-in-out" onclick="toggleDrawer()"></div>
        <div id="drawer" class="fixed top-0 right-[-500px] w-[500px] h-full bg-white transition-all duration-500 z-10 max-[431px]:w-[300px]">
            <div class="p-5 flex flex-col justify-center items-center max-sm:hidden">
                <button class="text-4xl absolute top-2 left-2" onclick="toggleDrawer()"><i class='bx bx-x'></i></button>
                <h2 class="text-3xl font-semibold mb-2">CART</h2>
                <p>You're <strong>$49.99</strong> away from free shipping!</p>
                <div id="productContainer" class="relative flex w-full h-[8.25rem] mt-5 border-b-2 border-gray-200">
                    <!-- Product details here -->
                </div>
                <div class="absolute bottom-0 left-0 right-0">
                    <!-- Order button here -->
                </div>
            </div>
            <!-- Responsive Navbar mobile -->
            <div class="p-5 flex flex-col justify-center items-center">
                <button class="text-4xl absolute top-2 left-2" onclick="toggleDrawer()"><i class='bx bx-x'></i></button>
                <nav class="flex text-sm font-bold xl:hidden max-sm:flex-col max-sm:text-center max-sm:space-y-3 max-sm:text-xl">
                    <a href="{{ url('/') }}" class="p-5 hover:underline underline-offset-4 focus:underline">HOME</a>
                    <a href="{{ url('/women') }}" class="p-5 hover:underline underline-offset-4 focus:underline">WOMAN</a>
                    <a href="{{ url('/man') }}" class="p-5 hover:underline underline-offset-4 focus:underline">MAN</a>
                    <a href="{{ url('/newarrivals') }}" class="p-5 hover:underline underline-offset-4 focus:underline">NEW ARRIVALS</a>
                    <a href="{{ url('/contact') }}" class="p-5 hover:underline underline-offset-4 focus:underline">CONTACT</a>
                </nav>
            </div>
        </div>
        <button class="drawer-toggle p-3 text-2xl" onclick="toggleDrawer()"><i class='bx bx-shopping-bag'></i></button>
        <!-- Menu Mobile -->
        <button class="sm:hidden" onclick="toggleDrawer()"><i class='bx bx-menu max-sm:text-4xl'></i></button>
    </div>
</header>
<div class="fixed top-16 z-40 w-full h-7 flex justify-center items-center bg-black">
    <marquee behavior="" direction="" class="space-x-40 text-nowrap">
        <strong class="text-white text-xs">FREE SHIPPING ON ORDERS OVER $50!</strong>
        <strong class="text-white text-xs">EXCITING PROMOTIONS - LIMITED QUANTITIES!</strong>
    </marquee>
</div>
<!-- Main Content -->
<main class="pt-16">
    @yield('content')
</main>
<!-- FOOTER -->
<footer class="w-full h-96 max-[431px]:h-auto bg-black">
    <div class="col flex max-[431px]:flex-col h-[332px] max-[431px]:h-full ">
        <div class="max-[431px]:w-full w-2/4 mt-10">
            <img src="{{ asset('asset/img/LogoFooter.png') }}" alt="Logo" class="w-28 h-28 max-[431px]:ml-[150px]">
            <ul class="text-[#CFCFCF] space-y-0 mt-1 max-[431px]:text-center ">
                <li><a href="">158A Le loi, Thanh Khe, Da Nang</a></li>
                <li><a href="">Company: TienTuyenShoes</a></li>
                <li><a href="">Tel: + 84 24 3767 4686</a></li>
                <li><a href="">Email: TienTuyenShoes@vnuk.edu.vn</a></li>
                <li><a href="">Slogan: 22090003 To VNUK all Top – The world beneath your feet will be a success every step 08/06/2024</a></li>
            </ul>
        </div>
        <div class="w-full flex justify-around mt-10 max-[431px]:flex-wrap">
            <div class="w-[15%] px-4 max-sm:w-[20%] max-sm:text-center max-[431px]:w-[45%] max-[431px]:mb-4">
                <span class="font-semibold text-white">About Us</span>
                <ul class="text-[#CFCFCF] space-y-2 mt-4">
                    <li><a href="" class="hover:text-white">Contact</a></li>
                    <li><a href="" class="hover:text-white">FAQs</a></li>
                    <li><a href="" class="hover:text-white">Support</a></li>
                    <li><a href="" class="hover:text-white">Blog</a></li>
                    <li><a href="" class="hover:text-white">Team</a></li>
                </ul>
            </div>
            <div class="w-[15%] px-4 max-sm:w-[20%] max-sm:text-center max-[431px]:w-[45%] max-[431px]:mb-4">
                <span class="font-semibold text-white">Services</span>
                <ul class="text-[#CFCFCF] space-y-2 mt-4">
                    <li><a href="" class="hover:text-white">Pricing</a></li>
                    <li><a href="" class="hover:text-white">Features</a></li>
                    <li><a href="" class="hover:text-white">Demo</a></li>
                    <li><a href="" class="hover:text-white">Get Started</a></li>
                    <li><a href="" class="hover:text-white">Sign Up</a></li>
                    <li><a href="" class="hover:text-white">Tutorials</a></li>
                    <li><a href="" class="hover:text-white">Forum</a></li>
                </ul>
            </div>
            <div class="w-[15%] px-4 max-sm:w-[20%] max-sm:text-center max-[431px]:w-[45%] max-[431px]:mb-4">
                <span class="font-semibold text-white">Resources</span>
                <ul class="text-[#CFCFCF] space-y-2 mt-4">
                    <li><a href="" class="hover:text-white">Documentation</a></li>
                    <li><a href="" class="hover:text-white">Support Center</a></li>
                    <li><a href="" class="hover:text-white">Community</a></li>
                </ul>
            </div>
            <div class="w-[15%] px-4 max-sm:w-[20%] max-sm:text-center max-[431px]:w-[45%]">
                <span class="font-semibold text-white">Get Help</span>
                <ul class="text-[#CFCFCF] space-y-2 mt-4">
                    <li><a href="" class="hover:text-white">Help Center</a></li>
                    <li><a href="" class="hover:text-white">Contact Us</a></li>
                    <li><a href="" class="hover:text-white">Privacy Policy</a></li>
                    <li><a href="" class="hover:text-white">Terms</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col border-b-[0.1px] bg-[#C6C6C6] opacity-50"></div>
    <div class="col flex max-[431px]:flex-col justify-between items-center mt-2">
        <div class="text-[#C6C6C6] space-x-4 opacity-40 max-[431px]:text-center">
            <span class=""><i class='bx bx-copyright'></i>2024 SellShoes. All rights reserved</span>
            <span class="underline"><a href="">Privacy Policy</a></span>
            <span class="underline"><a href="">Terms and Conditions</a></span>
            <span class="underline"><a href="">Cookies Policy</a></span>
        </div>
        <div class="text-[#C6C6C6] text-3xl space-x-3 opacity-50 max-[431px]:text-center max-[431px]:mt-4">
            <a href=""><i class='bx bxl-facebook-circle'></i></a>
            <a href=""><i class='bx bxl-instagram'></i></a>
            <a href=""><i class='bx bxl-twitter'></i></a>
            <a href=""><i class='bx bxl-linkedin-square'></i></a>
        </div>
    </div>
</footer>
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
