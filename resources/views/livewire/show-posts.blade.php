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
                <livewire:post-row :key="$post->id" :post="$post">
            @endforeach
        </tbody>
    </table>
</div>
