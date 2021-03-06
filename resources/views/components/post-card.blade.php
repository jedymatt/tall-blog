@props(['post'])

<article class="p-4 border rounded-md w-full max-w-2xl transition hover:shadow-md">
    <h1 class="text-4xl font-black hover:text-indigo-700">
        <a href="{{ route('posts.show', $post) }}">
            {{ $post->title }}
        </a>
    </h1>
    <p class="mt-4 text-gray-600 line-clamp-2">
        <a href="{{ route('posts.show', $post) }}">
            {{ $post->body }}
        </a>
    </p>
    <div class="mt-4">
        <div class="flex flex-row gap-2">
            <div class="self-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div class="flex flex-col gap">
                <div class="text-sm font-semibold hover:text-indigo-700">
                    <a href="#">{{ $post->user->name }}</a>
                </div>
                <div>
                    <span class="text-sm italic text-gray-600">
                        Published at
                        {{ $post->formattedPublishedAt() }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</article>
