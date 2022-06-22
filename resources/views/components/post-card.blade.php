@props(['post'])

<div class="rounded-md border shadom-sm hover:shadow-md hover:shadow-indigo-300/50 p-4">
    <a href="{{ route('posts.show', $post) }}">
        <h2 class="hover:text-indigo-700">{{ $post->title }}</h2>
    </a>
    <div class="mt-4 line-clamp-3">
        <a href="{{ route('posts.show', $post) }}">
            {!! $post->body !!}
        </a>
    </div>
    <div class="mt-4">
        <div class="flex flex-row gap-2">
            <div class="self-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
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
                    <span class="text-gray-600 text-sm italic">
                        Published at
                        {{ $post->published_at?->diffForHumans() }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
