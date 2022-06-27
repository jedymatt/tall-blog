<div class="shadow p-4 bg-white sm:rounded-md">
    <div class="flex flex-col gap-4">
        <label>
            Name
            <input class="form-input" type="text" wire:model.defer="user.name">
            @error('user.name')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </label>

        <label>
            Email
            <input class="form-input" type="email" wire:model.defer="user.email">
            @error('user.email')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </label>
    </div>
    <div class="mt-4 flex justify-end w-full">
        @if (session('success'))
            {{ session('success') }}
        @endif
        <button wire:click="update" class="form-btn">Save</button>
    </div>
</div>
