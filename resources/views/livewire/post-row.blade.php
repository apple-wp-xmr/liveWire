<tr class="border-b hover:bg-gray-50">
    <td class="px-6 py-4 text-gray-700">{{ $post->title }}</td>
    <td class="px-6 py-4 text-gray-500">{{ str($post->content)->words(8) }}</td>
    <td class="px-6 py-4">
        <button type="button" wire:click="$parent.delete({{ $post->id }})"
            class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-offset-2 transition">
            Delete
        </button>
        @if (!$post->archive)
            <button type="button" wire:click="archive"
                class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-offset-2 transition">
                Archive
            </button>
        @endif

    </td>
</tr>
