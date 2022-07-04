<x-app-layout>
    <div class="py-12 px-6">
        <div class="flex flex-col items-center">
            @foreach ($posts as $post)
                <article class="first:mt-0 mt-4 p-6 rounded-md border hover:cursor-pointer max-w-3xl container hover:shadow-md">
                    <h1 class="text-4xl font-black hover:text-blue-800">
                        {{ $post->title }}
                    </h1>
                    <p class="mt-4 line-clamp-2 text-gray-800">
                        {{ $post->body }}
                    </p>
                    <div class="mt-4 text-gray-600 text-sm">
                        <p>Authored by {{ $post->user->name }}</p>
                        <p>Created at {{ $post->created_at->format('M d, Y') }}</p>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</x-app-layout>
