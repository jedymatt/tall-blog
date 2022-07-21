<x-app-layout>
    <div class="py-12 px-6">
        <div class="flex flex-col items-center">
            @foreach ($posts as $post)
                <article
                    class="first:mt-0 mt-4 p-6 rounded-md border hover:cursor-pointer max-w-3xl container hover:shadow-md">
                    <h1 class="text-4xl font-black hover:text-blue-800">
                        {{ $post->title }}
                    </h1>
                    <p class="mt-4 line-clamp-2 text-gray-800">
                        {{ $post->body }}
                    </p>
                    <!-- Action Buttons -->
                    <div class="mt-4 flex flex-row gap-4 justify-end">
                        <!-- View -->
                        <x-button outline href="{{ route('posts.show', $post) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                <path fill-rule="evenodd"
                                    d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            View
                        </x-button>
                        @livewire('toggle-publish-button', ['post' => $post])
                        <!-- Edit -->
                        <x-button href="{{ route('user.posts.edit', $post) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                            </svg>
                            Edit
                        </x-button>
                        <!-- Delete -->
                        <x-button danger>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                            Delete
                        </x-button>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</x-app-layout>
