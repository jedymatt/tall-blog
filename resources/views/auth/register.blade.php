<x-app-layout>
    <div class="lg:py-6 lg:px-4 px-2 py-3">

            <div class="relative flex justify-center">
                <div>
                    <div class="bg-gray-50 px-4 py-6 rounded-md drop-shadow-lg">
                        <form action="{{ route('register')}}" method="POST">
                            @csrf
                            <label class="text-sm">
                                Name
                                <input type="text" name="name" value="{{ old('name') }}" class="mt-1 w-full rounded-md  focus:ring-2 focus:ring-blue-200 focus:border-blue-500" required>
                            </label>

                            <div class="mt-4">
                                <label class="text-sm">
                                    Email
                                    <input type="text" name="email" value="{{ old('email') }}" class="mt-1 w-full rounded-md focus:ring-2 focus:ring-blue-200 focus:border-blue-500" required>
                                </label>
                            </div>
                            <div class="mt-4">
                                <label class="text-sm">
                                    Password
                                    <input type="password" name="password" class="mt-1 w-full rounded-md focus:ring-2 focus:ring-blue-200 focus:border-blue-500" required>
                                </label>
                            </div>
                            <div class="mt-4">
                                <label class="text-sm">
                                    Confirm Password
                                    <input type="password" name="password_confirmation" class="mt-1 w-full rounded-md focus:ring-2 focus:ring-blue-200 focus:border-blue-500" required>
                                </label>
                            </div>
                            <div class="mt-4 flex justify-end">
                                <button type="submit" class="bg-blue-500 text-white rounded-lg px-4 py-1 flex items-center hover:bg-blue-700 focus:ring ring-blue-800 shadow-lg shadow-blue-700/50 font-medium">
                                    Register
                                </button>

                            </div>
                        </form>
                    </div>
                </div>

        </div>
    </div>
</x-app-layout>
