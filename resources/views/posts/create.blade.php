<x-app-layout>
    <div class="py-12">
        <div class="px-12">
            <form action="{{ route('posts.create') }}" method="post">
                @csrf

                <label>
                    Title
                    <input type="text" name="title" value="{{ old('title') }}"
                           class="block w-full rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </label>
                <div class="mt-4">
                    <label>
                        Content
                        <textarea name="content" cols="30" rows="10"
                                  class="block w-full rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ old('content') }}</textarea>
                    </label>
                </div>
                <div class="mt-4 flex justify-end">
                    <button
                        class="px-3 py-2 bg-indigo-500 rounded-md text-white focus:ring ring-indigo-300 active:bg-indigo-700 hover:bg-indigo-700 focus:outline-none">
                        Submit Post
                    </button>

                </div>
            </form>
        </div>
    </div>
</x-app-layout>
