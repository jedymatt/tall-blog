<x-app-layout>
    <div class="px-4 py-6">
        <form method="POST" action="{{ route('my-posts.edit', $post) }}">
            @csrf
            @method('put')
            @if ($errors->any())
                <div>
                    @foreach ($errors->all() as $error)
                        <li class="text-red-600 text-sm">
                            {{ $error }}
                        </li>
                    @endforeach
                </div>
            @endif
            <div class="flex items-center justify-between">
                <h1 class="text-3xl font-semibold">Write a Post</h1>
                <div class="flex flex-row gap-4 items-baseline">
                    @if ($post->isDrafted())
                        @livewire('toggle-publish-button', ['post' => $post, 'buttonText' => 'Publish Post', 'buttonTextFallback' => 'Unpublish Post'])
                    @endif
                    <button class="p-2 rounded-md bg-indigo-500 text-white hover:bg-indigo-800 text-sm transition-colors"
                        type="submit">Save</button>
                </div>
            </div>
            <textarea
                class="mt-4 resize-y w-full text-3xl font-bold border-transparent focus:border-transparent focus:ring-transparent placeholder:text-gray-400"
                name="title" placeholder="Title" rows="1">{{ old('title', $post->title) }}</textarea>
            <div class="mt-4">
                <textarea id="editor" name="body" style="display: none;" placeholder="Content here...">{{ old('body', $post->body) }}</textarea>
            </div>
        </form>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                setAsEditor('editor');
            });
        </script>
    @endpush
</x-app-layout>
