<x-app-layout>
    <div class="py-6">
        <div class="flex justify-center">
            <form method="POST">
                @csrf
                <div class="flex flex-col">
                    <label for="name" class="text-sm text-gray-600">Name</label>
                    <input id="name" type="text" class="border border-gray-400 p-2 w-full" name="name"
                        value="{{ old('name') }}" required autofocus>
                    @error('name')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="email" class="text-sm text-gray-600">Email</label>
                    <input id="email" type="email" class="border border-gray-400 p-2 w-full" name="email"
                        value="{{ old('email') }}" required>
                    @error('email')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="password" class="text-sm text-gray-600">Password</label>
                    <input id="password" type="password" class="border border-gray-400 p-2 w-full" name="password"
                        required>
                    @error('password')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="password-confirm" class="text-sm text-gray-600">Confirm Password</label>
                    <input id="password-confirm" type="password" class="border border-gray-400 p-2 w-full"
                        name="password_confirmation" required>
                </div>
                <div class="flex flex-col">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
