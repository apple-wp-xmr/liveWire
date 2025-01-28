<tr class="border-b hover:bg-gray-50">
    <td class="px-6 py-4 text-gray-700">{{ $post->title }}</td>
    <td class="px-6 py-4 text-gray-500">{{ str($post->content)->words(8) }}</td>
    {{-- <td class="px-6 py-4">
        <button type="button" wire:confirm='are you sure?' wire:click="delete({{ $post->id }})"
            class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-offset-2 transition">
            Delete
        </button>               
    </td> --}}
    <td class="px-6 py-4">
        <x-dialog>
            <x-dialog.button>
                <button type="button"
                    class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-offset-2 transition">
                    Delete
                </button>  
            </x-dialog.button>
            <x-dialog.panel>
                <div class="flex flex-col gap-6" x-data="{ confirmation: '' }">
                    <h2 class="font-semibold text-3xl">Are you sure?</h2>
                    <h2 class="text-lg text-slate-700">This operation is permanant and can be reversed. This post will be deleted forever.</h2>

                    <label class="flex flex-col gap-2">
                        Type "CONFIRM"
                        <input x-model="confirmation" class="px-3 py-2 border border-slate-300 rounded-lg" placeholder="CONFIRM">
                    </label>

                    <x-dialog.footer>
                        <x-dialog.close>
                            <button type="button" class="text-center rounded-xl bg-slate-300 text-slate-800 px-6 py-2 font-semibold">Cancel</button>
                        </x-dialog.close>

                        <x-dialog.close>
                            <button  :disabled="confirmation !== 'CONFIRM'"  x-on:click=" await $wire.$dispatch('delete'); $dialog.close()" type="button" class="text-center rounded-xl bg-red-500 text-white px-6 py-2 font-semibold disabled:cursor-not-allowed disabled:opacity-50">Delete</button>
                        </x-dialog.close>
                    </x-dialog.footer>
                </div>
            </x-dialog.panel>
        </x-dialog>
                   
    </td>
</tr>