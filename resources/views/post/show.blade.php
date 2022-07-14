<x-app-layout>
    <div class="py-12 px-6">
        <div class="flex justify-center">
            <article class="max-w-3xl w-full prose">
                <h1>{{ $post->title }}</h1>
                <p class="text-gray-600">
                    Posted by {{ $post->user->name }}
                    <span class="block">Published at {{ $post->published_at->format('M d, Y') }}</span>
                </p>
                <p class="mt-4">
                    {!! Str::markdown($post->body) !!}
                </p>
            </article>
        </div>
    </div>
</x-app-layout>
