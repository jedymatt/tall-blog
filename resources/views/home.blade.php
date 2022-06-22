<x-app-layout>
    <div class="py-12 px-6">
        <div class="grid gap-2 place-items-center">
            @foreach ($posts as $post)
                <div class="w-2/3">
                    <x-post-card :post="$post" />
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
