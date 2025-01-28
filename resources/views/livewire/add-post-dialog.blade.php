<div>
    <x-dialog  wire:model="show">
        <x-dialog.button>
            <button type="button" class="text-blue-500 bg-white rounded-xl px-2 py-2 text-sm">New Post</button>
        </x-dialog.button>
        <x-dialog.panel>
            <form wire:submit='add' class="flex flex-col gap-6 text-black">
                <!-- Title Field -->
                <label for="title" class="flex flex-col">
                    <span class="text-gray-700 font-medium mb-2">Title</span>
                    <input type="text" id="title" name="title" wire:model='form.title'
                        class="border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent placeholder-gray-400"
                        placeholder="Enter your title" autofocus>
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
                        <button type="button" class="text-center rounded-xl bg-slate-300 text-slate-800 px-6 py-2 font-semibold">Cancel</button>
                    </x-dialog.close>

                    <button type="submit"
                        class="bg-blue-500 text-white font-semibold px-6 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 transition">
                        Submit
                    </button>
                </x-dialog.footer>
            </form>
        </x-dialog.panel>
    </x-dialog>
</div>
