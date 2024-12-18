<x-layout>
    <div class="fixed top-16 z-40 w-full h-7 flex justify-center items-center bg-black">
        <strong class="text-white text-xs">ENJOY OUR GREAT INTERNATIONAL SHIPPING RATES</strong>
    </div>
    <!-- Background -->
    <div class="w-full h-80 mt-7">
        <div class="h-full w-1/2 m-auto flex flex-col justify-center items-center max-[431px]:w-full">
            <span class="text-7xl my-6 font-bold max-[431px]:text-center max-[431px]:text-[40px]">NEW ARRIVALS</span>
            <span class="text-center text-lg px-16 font-medium text-gray-500 max-[431px]:p-0">Explore our latest arrivals! We've just
                updated with fresh fashion trends,
                from everyday outfits to stylish accessories, ready to make you stand out anywhere, anytime.</span>
        </div>
    </div>
    <!-- PRODUCT -->
    <div class="col h-14 flex justify-between mt-5">
        <div id="filterContainer" class="h-full flex items-center font-medium justify-between cursor-pointer">
            <button><i class='bx bx-filter text-2xl'></i></button>
            <strong id="filterText" class="text-sm">SHOW FILTERS</strong>
        </div>
        <form method="GET" action="{{ route('newarrivals.index') }}">
            <div class="h-full flex items-center space-x-2">
                <input id="searchInput" name="search" type="text" placeholder="Search..." class="w-[450px] border rounded p-3 text-sm max-[431px]:hidden">
                <button id="searchButton" type="submit"><i
                        class='bx bx-search p-3 rounded-full text-white text-center bg-black'></i></button>
            </div>

            <select id="" name="sort" class="h-full flex items-center font-bold">
                <option value="revevance">SORT BY</option>
                <option value="lowestprice">LOWEST PRICE</option>
                <option value="highestprice">HIGHEST PRICE</option>
                <option value="newestfirst">NEWEST FIRST</option>
            </select>
        </form>
    </div>
    <section class="col h-full m-auto mb-10 mt-4 flex max-[431px]:m-0">
        <div id="filterPanel" class="w-60 h-full max-[431px]:hidden hidden pr-4">
            <div class="w-full flex flex-col border-y-[1.5px] border-black">
                <div class="toggle-button flex justify-between cursor-pointer">
                    <span class="text-xl font-medium my-3">Shoes</span>
                    <i class='bx bx-chevron-up text-3xl my-2'></i>
                </div>
                <div class="w-full h-auto flex flex-col text-lg font-medium mb-2 hidden">
                    <a href="">Jordan</a>
                    <a href="">Running</a>
                    <a href="">Skate</a>
                    <a href="">Lifestyle</a>
                    <a href="">Boots</a>
                    <a href="">Golf</a>
                    <a href="">Sandals</a>
                </div>
            </div>
            <div class="w-full flex flex-col border-b-[1.5px] border-black">
                <div class="toggle-button flex justify-between cursor-pointer">
                    <span class="text-xl font-medium my-3">Gender</span>
                    <i class='bx bx-chevron-up text-3xl my-2'></i>
                </div>
                <div class="w-full h-auto text-lg font-medium mb-2 hidden">
                    <input type="checkbox" id="men" name="men" value="Men" class="h-6 w-6">
                    <label for="men"> Man</label><br>
                    <input type="checkbox" id="women" name="women" value="Women" class="h-6 w-6">
                    <label for="women"> Women</label><br>
                    <input type="checkbox" id="unisex" name="unisex" value="Unisex" class="h-6 w-6">
                    <label for="unisex"> Unisex</label><br>
                </div>
            </div>
            <div class="w-full flex flex-col border-b-[1.5px] border-black">
                <div class="toggle-button flex justify-between cursor-pointer">
                    <span class="text-xl font-medium my-3">Size</span>
                    <i class='bx bx-chevron-up text-3xl my-2'></i>
                </div>
                <div class="w-full h-auto text-lg font-medium mb-2 hidden">
                    <button
                        class="w-14 h-14 mb-2 border-[1.5px] border-black hover:border-2 rounded-md focus:bg-black focus:text-white">
                        37.5
                    </button>
                    <button
                        class="w-14 h-14 mb-2 border-[1.5px] border-black hover:border-2 rounded-md focus:bg-black focus:text-white">
                        38
                    </button>
                    <button
                        class="w-14 h-14 mb-2 border-[1.5px] border-black hover:border-2 rounded-md focus:bg-black focus:text-white">
                        38.5
                    </button>
                    <button
                        class="w-14 h-14 mb-2 border-[1.5px] border-black hover:border-2 rounded-md focus:bg-black focus:text-white">
                        39
                    </button>
                    <button
                        class="w-14 h-14 mb-2 border-[1.5px] border-black hover:border-2 rounded-md focus:bg-black focus:text-white">
                        40
                    </button>
                    <button
                        class="w-14 h-14 mb-2 border-[1.5px] border-black hover:border-2 rounded-md focus:bg-black focus:text-white">
                        40.5
                    </button>
                    <button
                        class="w-14 h-14 mb-2 border-[1.5px] border-black hover:border-2 rounded-md focus:bg-black focus:text-white">
                        41
                    </button>
                    <button
                        class="w-14 h-14 mb-2 border-[1.5px] border-black hover:border-2 rounded-md focus:bg-black focus:text-white">
                        42
                    </button>
                    <button
                        class="w-14 h-14 mb-2 border-[1.5px] border-black hover:border-2 rounded-md focus:bg-black focus:text-white">
                        42.5
                    </button>
                    <button
                        class="w-14 h-14 mb-2 border-[1.5px] border-black hover:border-2 rounded-md focus:bg-black focus:text-white">
                        43
                    </button>
                </div>
            </div>
            <div class="w-full flex flex-col border-b-[1.5px] border-black">
                <div class="toggle-button flex justify-between cursor-pointer">
                    <span class="text-xl font-medium my-3">Color</span>
                    <i class='bx bx-chevron-up text-3xl my-2'></i>
                </div>
                <div class="w-full h-auto text-lg font-medium mb-2 hidden">
                    <input type="checkbox" id="black" name="black" value="Black" class="h-6 w-6">
                    <label for="black"> Black</label><br>
                    <input type="checkbox" id="white" name="white" value="White" class="h-6 w-6">
                    <label for="white"> White</label><br>
                    <input type="checkbox" id="blue" name="blue" value="Blue" class="h-6 w-6">
                    <label for="blue"> Blue</label><br>
                    <input type="checkbox" id="brown" name="brown" value="Brown" class="h-6 w-6">
                    <label for="brown"> Brown</label><br>
                    <input type="checkbox" id="green" name="green" value="Green" class="h-6 w-6">
                    <label for="green"> Green</label><br>
                    <input type="checkbox" id="gray" name="gray" value="Gray" class="h-6 w-6">
                    <label for="gray"> Gray</label><br>
                </div>
            </div>
            <div class="w-full flex flex-col border-b-[1.5px] border-black">
                <div class="toggle-button flex justify-between cursor-pointer">
                    <span class="text-xl font-medium my-3">Price</span>
                    <i class='bx bx-chevron-up text-3xl my-2'></i>
                </div>
                <div class="w-full h-auto text-lg font-medium mb-2 hidden">
                    <input type="checkbox" id="low" name="low" value="Low" class="h-6 w-6">
                    <label for="low"> $50 - $100</label><br>
                    <input type="checkbox" id="average" name="average" value="Average" class="h-6 w-6">
                    <label for="average"> $100 - $150</label><br>
                    <input type="checkbox" id="high" name="high" value="High" class="h-6 w-6">
                    <label for="high"> Over $150</label><br>
                </div>
            </div>
        </div>
        <div id="productContainer" class="w-full h-full mb-20 max-[431px]:m-0 max-[431px]:ml-3 grid grid-cols-4 gap-3 max-[431px]:grid-cols-1">
            @foreach($products as $product)
                <x-product-card-item :product="$product" />
            @endforeach
        </div>

    </section>
    <!-- CART -->
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
    <!-- REMOVE PRODUCT FROM CART -->
    <script>
        var deleteButton = document.getElementById('deleteProductBtn');
        deleteButton.addEventListener('click', function () {
            var productContainer = document.getElementById('productContainer');
            productContainer.remove();
        });
    </script>
    <!-- Filter hidden -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const filterContainer = document.getElementById('filterContainer');
            const filterPanel = document.getElementById('filterPanel');
            const filterText = document.getElementById('filterText');

            filterContainer.addEventListener('click', function () {
                if (filterPanel.style.display === 'none') {
                    filterPanel.style.display = 'block';
                    filterText.textContent = 'HIDE FILTERS';
                } else {
                    filterPanel.style.display = 'none';
                    filterText.textContent = 'SHOW FILTERS';
                }
            });
        });

    </script>
    <!-- Accordion hidden -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggleButtons = document.querySelectorAll('.toggle-button');

            toggleButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const content = this.nextElementSibling;
                    content.classList.toggle('hidden');
                });
            });
        });
    </script>
    <!-- AUTO CALC -->
    <script>
        function updateTotal() {
            const quantityInput = document.getElementById('quantity');
            const productPriceElement = document.getElementById('productPrice');
            const subtotalElement = document.getElementById('subtotal');
            const totalElement = document.getElementById('total');

            const productPrice = parseFloat(productPriceElement.innerText.replace('$', ''));
            const quantity = parseInt(quantityInput.value);
            const subtotal = productPrice * quantity;

            subtotalElement.innerText = `$${subtotal.toFixed(2)}`;
            totalElement.innerText = `$${subtotal.toFixed(2)}`;
        }

        function deleteProduct() {
            const productContainer = document.getElementById('productContainer');
            productContainer.remove();

            const subtotalElement = document.getElementById('subtotal');
            const totalElement = document.getElementById('total');
            subtotalElement.innerText = `$0.00`;
            totalElement.innerText = `$0.00`;
        }

        document.getElementById('quantity').addEventListener('input', updateTotal);
        document.getElementById('deleteProductBtn').addEventListener('click', deleteProduct);
    </script>
</x-layout>
