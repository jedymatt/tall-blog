<x-app-layout>
    <div class="py-12 sm:px-4">
        <div class="flex justify-center">
            <div class="max-w-3xl w-full flex flex-col gap-4">
                <div>
                    <div class="grid sm:grid-cols-3 grid-flow-row gap-4">
                        <div class="px-4 sm:pt-4 font-semibold">
                            Personal Information
                        </div>
                        <div class="col-span-2 shadow p-4 bg-white sm:rounded-md">
                            <div class="flex flex-col gap-4">
                                <label>
                                    Name
                                    <input class="form-input" type="text" value="{{ $user->name }}">
                                </label>

                                <label>
                                    Email
                                    <input class="form-input" type="email" value="{{ $user->email }}">
                                </label>
                            </div>
                            <div class="mt-4 flex justify-end w-full">
                                <button class="form-btn">Save</button>
                            </div>
                        </div>

                    </div>

                    <div class="border-t mt-4 pt-4 grid sm:grid-cols-3 grid-flow-row gap-4">
                        <div class="px-4 sm:pt-4 font-semibold">
                            Password
                        </div>
                        <div class="col-span-2">
                            @livewire('user.profile.update-password')
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
</x-app-layout>
