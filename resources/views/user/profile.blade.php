<x-app-layout>
    <div class="py-12 sm:px-4">
        <div class="flex justify-center">
            <div class="max-w-3xl w-full flex flex-col gap-4">
                <div>
                    <div class="grid sm:grid-cols-3 grid-flow-row gap-4">
                        <div class="px-4 sm:pt-4 font-semibold">
                            Personal Information
                        </div>
                        <div class="col-span-2 ">
                            @livewire('user.profile.update-personal-information')
                        </div>
                    </div>

                    <div class="border-t mt-4 pt-4 grid sm:grid-cols-3 grid-flow-row gap-4">
                        <div class="px-4 sm:pt-4 font-semibold">
                            Update Password
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
