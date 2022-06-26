<x-app-layout>
    <div class="py-12 px-6">
        <div class="grid gap-6 place-items-center">
            @foreach ($posts as $post)
                <x-post-card :post="$post" />
            @endforeach
        </div>
    </div>
</x-app-layout>
