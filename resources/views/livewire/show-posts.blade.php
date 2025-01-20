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
                    {{-- <td class="px-6 py-4">
                        <button type="button" wire:confirm='are you sure?' wire:click="delete({{ $post->id }})"
                            class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-offset-2 transition">
                            Delete
                        </button>               
                    </td> --}}
                    <td class="px-6 py-4">
                        <x-dialog>
                            <x-dialog.button>
                                <button type="button" wire:confirm='are you sure?'
                                    class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-offset-2 transition">
                                    Delete
                                </button>  
                            </x-dialog.button>
                            <x-dialog.panel>
                                <div class="flex flex-col gap-6" x-data="{ confirmation: '' }">
                                    <h2 class="font-semibold text-3xl">Are you sure you?</h2>
                                    <h2 class="text-lg text-slate-700">This operation is permanant and can be reversed. This post will be deleted forever.</h2>
        
                                    <label class="flex flex-col gap-2">
                                        Type "CONFIRM"
                                        <input x-model="confirmation" class="px-3 py-2 border border-slate-300 rounded-lg" placeholder="CONFIRM">
                                    </label>
        
                                    {{-- <x-dialog.footer>
                                        <x-dialog.close>
                                            <button type="button" class="text-center rounded-xl bg-slate-300 text-slate-800 px-6 py-2 font-semibold">Cancel</button>
                                        </x-dialog.close>
        
                                        <x-dialog.close>
                                            <button :disabled="confirmation !== 'CONFIRM'" wire:click="$dispatch('deleted')" type="button" class="text-center rounded-xl bg-red-500 text-white px-6 py-2 font-semibold disabled:cursor-not-allowed disabled:opacity-50">Delete</button>
                                        </x-dialog.close>
                                    </x-dialog.footer> --}}
                                </div>
                            </x-dialog.panel>
                        </x-dialog>
                                   
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
</div>
