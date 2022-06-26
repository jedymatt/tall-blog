<x-app-layout>
    <div class="py-12 px-4">
        <div class="flex justify-center">
            <div class="max-w-3xl w-full rounded-md border p-4 bg-white shadow-sm">
                <div class="grid grid-cols-3 grid-flow-row gap-y-4">
                    <div>
                        Name
                    </div>
                    <div class="col-span-2">
                        <input class="form-input" type="text" value="{{ $user->name }}">
                    </div>

                    <div>
                        Email
                    </div>
                    <div class="col-span-2">
                        <input class="form-input" type="email" value="{{ $user->email }}">
                    </div>

                </div>
                <div class="mt-4 flex justify-end w-full">
                    <button class="form-btn">Save</button>
                </div>
            </div>

        </div>

    </div>
</x-app-layout>
