<x-app-layout>
    <div class="py-12 px-4">
        <div class="flex justify-center">
            <div class="max-w-3xl w-full flex flex-col gap-4">
                <div class="rounded-md border p-4 bg-white shadow-sm">
                    <div class="grid grid-cols-3 grid-flow-row gap-4">
                        <div class="">
                            Personal Information
                        </div>
                        <div class="col-span-2 flex flex-col gap-4">
                            <label>
                                <span class="text-sm font-semibold">Name</span>
                                <input class="form-input" type="text" value="{{ $user->name }}">
                            </label>

                            <label>
                                <span class="text-sm font-semibold">Email</span>
                                <input class="form-input" type="email" value="{{ $user->email }}">
                            </label>
                        </div>
                        <div class="col-span-3 flex justify-end w-full">
                            <button class="form-btn">Save</button>
                        </div>
                    </div>

                    <div class="border-t mt-4 pt-4 grid grid-cols-3 grid-flow-row gap-4">
                        <div class="">
                            Security
                        </div>
                        <div class="col-span-2 flex flex-col gap-2">
                            <div>
                                <label>
                                    <span class="text-sm font-semibold">Current Password</span>
                                    <input class="form-input" type="password" placeholder="Current Password">
                                </label>
                            </div>
                            <div class="mt-4">
                                <label>
                                    <span class="text-sm font-semibold">New Password</span>
                                    <input class="form-input" type="password" placeholder="New Password">
                                </label>
                            </div>
                        </div>
                        <div class="col-span-3 flex justify-end w-full">
                            <button class="form-btn">Update Password</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</x-app-layout>
