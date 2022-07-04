<x-app-layout>
    <div class="py-12 px-6">
        <div class="grid gap-6 place-items-center">
            @foreach ($posts as $post)
                <x-post-card :post="$post" />
            @endforeach
        </div>
        <div class="mt-6 flex justify-center">
            <div class="max-w-2xl w-full">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
