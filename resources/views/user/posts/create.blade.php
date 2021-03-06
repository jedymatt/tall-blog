<x-app-layout>
    <div class="px-4 py-6">
        <form method="POST" action="{{ route('user.posts.create') }}">
            @csrf
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
                    <x-button disabled>
                        Publish
                    </x-button>
                    <x-button>
                        Save Post
                    </x-button>
                </div>
            </div>
            <textarea
                class="mt-4 resize-y w-full text-3xl font-bold border-transparent focus:border-transparent focus:ring-transparent placeholder:text-gray-400"
                name="title" placeholder="Title" rows="1"></textarea>
            <div class="mt-4">
                <textarea id="editor" name="body" style="display: none;" placeholder="Content here...">{{ old('body') }}</textarea>
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
