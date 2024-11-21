<x-layout>
    <div class="max-w-md mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-xl font-bold mb-4">Contact Us</h1>

        <!-- Flash Messages -->
        @if (session('success'))
            <div class="mb-4 bg-green-100 text-green-800 p-4 rounded border border-green-300">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-4 bg-red-100 text-red-800 p-4 rounded border border-red-300">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Contact Form -->
        <form action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full border rounded p-2 mt-1">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full border rounded p-2 mt-1">
            </div>
            <div class="mb-4">
                <label for="message" class="block text-sm font-medium">Message</label>
                <textarea id="message" name="message" rows="4" class="w-full border rounded p-2 mt-1">{{ old('message') }}</textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Send</button>
        </form>
    </div>
</x-layout>
