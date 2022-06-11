<x-app-layout>
    <div class="py-12 px-6">
        @foreach ($posts as $post)
        <div class="first:mt-0 mt-4">
            <article>
                <h2>{{ $post->title }}</h2>
                <p>{!! $post->body !!}</p>
            </article>
        </div>
        @endforeach
    </div>
</x-app-layout>
