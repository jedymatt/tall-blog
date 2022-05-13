<x-app-layout>
    <div class="py-12">
       <div class="px-6">
           @foreach ($posts as $post)
               <div class="m-4">
                   <div class="border rounded-md shadow-sm p-4">
                       <h2 class="text-xl font-medium">{{ $post->title }}</h2>
                       <p class="indent-5 mt-1">
                           {{ $post->content }}
                       </p>
                       <div class="mt-1">
                           <a href="{{ route('posts.show', $post) }}" class="hover:cursor-pointer">Read more...</a>
                       </div>
                   </div>
               </div>
           @endforeach
           {{ $posts->links() }}
       </div>
    </div>
</x-app-layout>
