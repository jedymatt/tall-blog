<x-app-layout>
    <div class="px-4 py-6">
        <form method="POST" action="{{ route('write-post') }}">
            @csrf
            <div class="flex items-center justify-between">
                <h1 class="text-3xl font-semibold">Write a Post</h1>
                <div class="flex flex-row gap-2">
                    <button class="p-2 rounded-md bg-indigo-500 text-white hover:bg-indigo-800 text-sm transition-colors"
                        type="submit">Save as Draft</button>
                </div>
            </div>
            <textarea
                class="mt-4 resize-y w-full text-3xl font-bold border-transparent focus:border-transparent focus:ring-transparent placeholder:text-gray-400"
                name="title" placeholder="Title" rows="1"></textarea>

            <textarea
                class="mt-4 h-48 resize-y w-full border-transparent focus:border-transparent focus:ring-transparent placeholder:text-gray-400"
                name="body" placeholder="Content here...">{{ old('body') }}</textarea>
        </form>
    </div>
</x-app-layout>
