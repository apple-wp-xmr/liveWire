<div class="p-6 bg-gray-100 rounded-lg shadow-md max-w-md mx-auto">
    <!-- Form -->
    <form wire:submit='add' class="flex items-center gap-4 mb-6">
        <!-- Input Field -->
        <input type="text" wire:model='todo'
            class="flex-1 border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
            placeholder="Enter a new todo">

        <!-- Add Button -->
        <button type='submit'
            class="bg-blue-500 text-white px-4 py-2 rounded-md font-semibold hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 transition">
            Add
        </button>
    </form>

    <!-- Divider -->
    <hr class="border-gray-300 mb-4">

    <!-- Todo List -->
    <ul class="space-y-2">
        @foreach ($todos as $todo)
            <li class="p-2 bg-white border border-gray-200 rounded-md shadow-sm">
                {{ $todo }}
            </li>
        @endforeach
    </ul>
</div>
