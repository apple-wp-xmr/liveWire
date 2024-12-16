<div>
    <h1 class="mb-4 text-2xl text-slate-700 font-semibold">Update your profile...</h1>

    <form wire:submit="save" class="max-w-[30rem] mx-auto flex flex-col gap-6 bg-white rounded-lg shadow p-6">
        <label class="flex flex-col gap-2">
            <h3 class="font-medium text-slate-700 text-base">Username <span class="text-red-500 opacity-75"
                    aria-hidden="true">*</span></h3>

            <input wire:model.blur="username" @class([
                'px-3 py-2 rounded-lg',
                'border border-slate-300' => $errors->missing('form.username'),
                'border-2 border-red-500' => $errors->has('form.username'),
            ])
                @error('form.username')
                    aria-invalid="true"
                    aria-description="{{ $message }}"
                @enderror>

            @error('form.username')
                <p class="text-sm text-red-500" aria-live="assertive">{{ $message }}</p>
            @enderror
        </label>

        <label class="flex flex-col gap-2">
            <h3 class="font-medium text-slate-700 text-base">Bio</h3>

            <textarea wire:model="bio" rows="4" class="px-3 py-2 border border-slate-300 rounded-lg"></textarea>
        </label>

        <div class="flex">
            <button type="submit"
                class="relative w-full bg-blue-500 py-3 px-8 rounded-lg text-white font-medium disabled:cursor-not-allowed disabled:opacity-75">
                Save
            </button>
        </div>
    </form>
</div>
