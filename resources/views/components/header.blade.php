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
