<x-layout>
    <div class="max-w-5xl mx-auto bg-white p-6 rounded shadow m-6 mt-12">
        <h1 class="text-xl font-bold mb-4">Contacts</h1>
        <table class="w-full border-collapse border border-gray-300">
            <thead>
            <tr>
                <th class="border border-gray-300 px-4 py-2">Name</th>
                <th class="border border-gray-300 px-4 py-2">Email</th>
                <th class="border border-gray-300 px-4 py-2">Message</th>
                <th class="border border-gray-300 px-4 py-2">Created At</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $contact->name }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $contact->email }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $contact->message }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $contact->created_at->format('Y-m-d H:i:s') }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
