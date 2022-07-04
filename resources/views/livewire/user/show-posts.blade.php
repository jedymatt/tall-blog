<div>
    @foreach ($posts as $post)
    <div class="mt-4">
        <article>
            <h2 class="text-2xl font-bold">
                <a href="{{ route('post.show', $post) }}">
                    {{ $post->title }}
                </a>
            </h2>
            <div>
                by {{ $post->user->name }}
            </div>
            <div class="text-gray-600">
                {{ $post->created_at->diffForHumans() }}
            </div>
            <div class="mt-2">
                {{ $post->body }}
            </div>
        </article>
    </div>
    @endforeach
    <div class="mt-4">
        {{ $posts->links() }}
    </div>
</div>
