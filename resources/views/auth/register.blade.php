<x-app-layout>
    <div class="py-12 px-4">
        <div class="flex flex-col justify-center items-center">
            <div class="w-full max-w-md rounded-md shadow-md p-4 bg-white">
                @if ($errors->any())
                    <div>
                        <div class="font-medium text-red-600">
                            {{ __('Whoops! Something went wrong.') }}
                        </div>

                        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <label>
                        Name
                        <input class="mt-1 w-full form-input" type="text" name="name" :value="old('name')" required
                            autofocus />
                    </label>
                    <div class="mt-4">
                        <label>
                            Email
                            <input class="mt-1 w-full form-input" type="email" name="email" :value="old('email')"
                                required />
                        </label>
                    </div>

                    <div class="mt-4">
                        <label>
                            Password
                            <input class="mt-1 w-full form-input" type="password" name="password" required />
                        </label>
                    </div>
                    <div class="mt-4">
                        <label>
                            Confirm Password
                            <input class="mt-1 w-full form-input" type="password" name="password_confirmation"
                                required />
                        </label>
                    </div>
                    <div class="mt-4 flex justify-end">
                        <x-button type="submit">Register</x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
