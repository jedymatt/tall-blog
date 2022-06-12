<x-app-layout>
    <div class="py-12">
        <div class="px-6">
            @foreach ($posts as $post)
            <div class="first:mt-0 mt-4 p-6 rounded-md border shadow-sm hover:cursor-pointer">
                <h1 class="hover:text-blue-800">
                    <a href="{{ route('posts.show', $post) }}">
                        {{ $post->title }}
                    </a>
                </h1>
                <p>Authored by: {{ $post->user->name }}</p>
                <p>{{ $post->created_at->format('M d, Y') }}</p>
            </div>
            @endforeach
            <div class="m-4">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
