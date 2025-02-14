<tr class="border-b hover:bg-gray-50">
    <td class="px-6 py-4 text-gray-700">{{ $post->title }}</td>
    <td class="px-6 py-4 text-gray-500">{{ str($post->content)->words(8) }}</td>
    {{-- <td class="px-6 py-4">
        <button type="button" wire:confirm='are you sure?' wire:click="delete({{ $post->id }})"
            class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-offset-2 transition">
            Delete
        </button>               
    </td> --}}
    <td class="px-6 py-4 flex gap-2">
        <x-dialog wire:model="showEditDialog">
            <x-dialog.button>
                <button type="button"
                    class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 transition">
                    Edit
                </button>
            </x-dialog.button>
            <x-dialog.panel>
                <form wire:submit='save' class="flex flex-col gap-6 text-black">
                    <!-- Title Field -->
                    <label for="title" class="flex flex-col">
                        <span class="text-gray-700 font-medium mb-2">Title</span>
                        <input type="text" id="title" name="title" wire:model='form.title'
                            class="border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent placeholder-gray-400"
                            placeholder="Enter your title">
                        @error('form.title')
                            <em>{{ $message }}</em>
                        @enderror
                    </label>

                    <!-- Content Field -->
                    <label for="content" class="flex flex-col">
                        <span class="text-gray-700 font-medium mb-2">Content</span>
                        <textarea name="content" id="content" cols="30" rows="8" wire:model='form.content'
                            class="border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none placeholder-gray-400"
                            placeholder="Write your content here"></textarea>
                        @error('form.content')
                            <em>{{ $message }}</em>
                        @enderror
                    </label>

                    <!-- Submit Button -->

                    <x-dialog.footer>
                        <x-dialog.close>
                            <button type="button"
                                class="text-center rounded-xl bg-slate-300 text-slate-800 px-6 py-2 font-semibold">Cancel</button>
                        </x-dialog.close>

                        <button type="submit"
                            class="bg-blue-500 text-white font-semibold px-6 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 transition">
                            Submit
                        </button>
                    </x-dialog.footer>
                </form>
            </x-dialog.panel>
        </x-dialog>

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
                    <h2 class="text-lg text-slate-700">This operation is permanant and can be reversed. This post will
                        be
                        deleted forever.</h2>

                    <label class="flex flex-col gap-2">
                        Type "CONFIRM"
                        <input x-model="confirmation" class="px-3 py-2 border border-slate-300 rounded-lg"
                            placeholder="CONFIRM">
                    </label>

                    <x-dialog.footer>
                        <x-dialog.close>
                            <button type="button"
                                class="text-center rounded-xl bg-slate-300 text-slate-800 px-6 py-2 font-semibold">Cancel</button>
                        </x-dialog.close>

                        <x-dialog.close>
                            <button :disabled="confirmation !== 'CONFIRM'"
                                x-on:click=" await $wire.$dispatch('delete'); $dialog.close()" type="button"
                                class="text-center rounded-xl bg-red-500 text-white px-6 py-2 font-semibold disabled:cursor-not-allowed disabled:opacity-50">Delete</button>
                        </x-dialog.close>
                    </x-dialog.footer>
                </div>
            </x-dialog.panel>
        </x-dialog>

    </td>
</tr>
