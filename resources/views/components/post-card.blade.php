@props(['post'])

<div class="max-w-sm rounded-md border shadom-sm hover:shadow-md p-4">
    <h2>{{ $post->title }}</h2>
    <div class="mt-4 line-clamp-3">
        {{ $post->body }}
    </div>
    <div>
        {{ $post->published_at }}
    </div>
</div>
