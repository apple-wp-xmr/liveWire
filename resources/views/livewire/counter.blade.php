<div class="flex flex-col items-center justify-center p-6 bg-gray-100 rounded-lg shadow-md max-w-sm mx-auto">
    <!-- Count Display -->
    <div class="text-2xl font-bold text-gray-800 mb-4">
        Count: <span class="text-blue-500">{{ $count }}</span>
    </div>

    <!-- Buttons -->
    <div class="flex gap-4">
        <button wire:click="decrement"
            class="bg-red-500 text-white px-4 py-2 rounded-md font-semibold hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-offset-2 transition">
            -
        </button>
        <button wire:click="increment(2)"
            class="bg-green-500 text-white px-4 py-2 rounded-md font-semibold hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-offset-2 transition">
            +
        </button>
    </div>
</div>
