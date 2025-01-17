<div class="p-6 bg-gray-100 rounded-lg shadow-md max-w-4xl mx-auto">
    <!-- Header -->
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Posts</h2>

    <!-- Table -->
    <table class="w-full border-collapse bg-white shadow-lg rounded-lg">
        <!-- Table Header -->
        <thead>
            <tr class="bg-blue-500 text-white">
                <th class="px-6 py-3 text-left text-sm font-semibold">Company</th>
                <th class="px-6 py-3 text-left text-sm font-semibold">Contact</th>
                <th class="px-6 py-3"></th>
            </tr>
        </thead>
        <!-- Table Body -->
        <tbody>
            @foreach ($posts as $post)
                {{-- <livewire:post-row :key="$post->id" :post="$post"> --}}

                <tr class="border-b hover:bg-gray-50">
                    <td class="px-6 py-4 text-gray-700">{{ $post->title }}</td>
                    <td class="px-6 py-4 text-gray-500">{{ str($post->content)->words(8) }}</td>
                    <td class="px-6 py-4">
                        <button type="button" wire:confirm='are you sure?' wire:click="delete({{ $post->id }})"
                            class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-offset-2 transition">
                            Delete
                        </button>               
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
</div>
