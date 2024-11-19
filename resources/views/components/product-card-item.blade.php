<div class="w-full h-auto flex-col max-[431px]:p-4">
    <div class="relative w-full h-auto">
        <a href="./details.html">
            <img src="{{ $product->main_image_url }}" alt=""
                 class="w-full h-auto object-cover">
            <img src="{{ $product->main_image_url }}" alt=""
                 class="w-full h-auto object-cover absolute inset-0 opacity-0 hover:opacity-100 transition-opacity duration-300">
        </a>
    </div>
    <div class="flex flex-col">
        <span class="text-xl font-bold mt-2">{{ $product->name }}</span>
        <span class="text-gray-500">{{ optional($product->category)->name }}</span>
        <a href="./details.html"><span class="underline text-gray-500">More color</span></a>
        <span class="font-semibold text-lg mt-3">{{ $product->price }}</span>
    </div>
</div>
