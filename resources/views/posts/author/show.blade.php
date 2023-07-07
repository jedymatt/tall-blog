<x-app-layout>
    <div class="h-full bg-gray-200 p-8">
        <div class="bg-white rounded-lg shadow-xl pb-8">
            <div class="w-full h-[250px]">
                <img src="https://vojislavd.com/ta-template-demo/assets/img/profile-background.jpg"
                    class="w-full h-full rounded-tl-lg rounded-tr-lg">
            </div>
            <div class="flex flex-col items-center -mt-20">
                <img src="{{$author->profile_pic ? asset('storage/' . $author->profile_pic) : 'https://ui-avatars.com/api/?name=' . $author->name . '&color=7F9CF5&background=EBF4FF' }}"
                    class="w-40 border-4 border-white rounded-full">
                <div class="flex items-center space-x-2 mt-2">
                    <p class="text-2xl">{{ $author->name }}</p>
                    <span class="bg-blue-500 rounded-full p-1" title="Verified">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-100 h-2.5 w-2.5" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                    </span>
                </div>
                <p class="text-gray-700">Member since - {{ $author->created_at?->format('M d, Y') }}</p>
            </div>

        </div>

        <div class="my-4 flex flex-col 2xl:flex-row space-y-4 2xl:space-y-0 2xl:space-x-4">

            <div class="flex flex-col w-full 2xl:w-2/3">

                <div class="flex-1 bg-white rounded-lg shadow-xl mt-4 p-8">
                    <h4 class="text-xl text-gray-900 font-bold">Posts</h4>

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mt-4">
                        @foreach ($posts as $post)
                        <div class="px-6 py-6 bg-gray-100 border border-gray-300 rounded-lg shadow-xl">
                            <div class="flex items-center justify-between">
                                <span class="font-bold text-lg text-indigo-600">
                                    <a href="{{ route('posts.show', $post) }}">
                                        {{ $post->title }}
                                    </a>
                                </span>
                            </div>
                            <div class="flex flex-col">
                                <p class="mt-4 text-gray-600 line-clamp-2">
                                    {{ $post->body }}
                                </p>
                            </div>
                            <div class="flex items-center justify-between mt-6">
                                <div>
                                    <span class="text-sm italic text-gray-600">
                                        Published at
                                        {{ $post->formattedPublishedAt() }}
                                    </span>
                                </div>
                                <div class="flex flex-col">
                                    <div class="flex items-end">
                                        <span class="text-sm italic text-gray-600">
                                            Comments: {{ $post->comments->count() }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div>

                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="mt-6 flex justify-center">
                        <div class="max-w-2xl w-full">
                            {{ $posts->links() }}
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</x-app-layout>