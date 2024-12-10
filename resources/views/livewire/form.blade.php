<div class="p-6 bg-gray-100 min-h-screen">
    <!-- Page Header -->
    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">New Post</h2>

    <!-- Form -->
    <form wire:submit='save' class="flex flex-col gap-6 bg-white p-8 rounded-lg shadow-lg max-w-lg mx-auto">
        <!-- Title Field -->
        <label for="title" class="flex flex-col">
            <span class="text-gray-700 font-medium mb-2">Title</span>
            <input type="text" id="title" name="title" wire:model='title'
                class="border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent placeholder-gray-400"
                placeholder="Enter your title">
            @error('title')
                <em>{{ $message }}</em>
            @enderror
        </label>

        <!-- Content Field -->
        <label for="content" class="flex flex-col">
            <span class="text-gray-700 font-medium mb-2">Content</span>
            <textarea name="content" id="content" cols="30" rows="8" wire:model='content'
                class="border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none placeholder-gray-400"
                placeholder="Write your content here"></textarea>
            @error('content')
                <em>{{ $message }}</em>
            @enderror
        </label>

        <!-- Submit Button -->
        <button type="submit"
            class="bg-blue-500 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 transition">
            Submit
        </button>
    </form>
</div>
