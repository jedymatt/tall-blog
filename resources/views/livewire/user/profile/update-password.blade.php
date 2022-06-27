<div class="shadow p-4 bg-white sm:rounded-md">
    @if ($errors->any())
        <div class="text-red-600">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="flex flex-col gap-4">
        <label>
            Current Password
            <input wire:model.defer="current_password" class="form-input" type="password" autocomplete="current-password"
                placeholder="Current Password">
        </label>
        <label>
            New Password
            <input wire:model.defer="password" class="form-input" type="password" autocomplete="new-password"
                placeholder="New Password">
        </label>
        <label>
            Confirm Password
            <input wire:model.defer="password_confirmation" class="form-input" type="password"
                autocomplete="new-password" placeholder="Confirm Password">
        </label>
    </div>
    <div class="mt-4 flex justify-end w-full">
        @if (session('message'))
            {{ session('message') }}
        @endif
        <button wire:click="update" class="form-btn">Update Password</button>
    </div>
</div>
