<x-app-layout>
    <div class="px-4 py-6">
        <form method="POST" action="{{ route('home.write-post') }}">
            @csrf
            <div class="flex  items-center justify-between">
            <h1>Write a Post</h1>
            <x-btn.primary type="submit">Save Post</x-btn.primary>
            </div>
            <div class="">
                <label>
                    <input type="text" class="text-3xl font-bold border-transparent focus:border-transparent focus:ring-transparent placeholder:text-gray-400" name="title" placeholder="Title">
                </label>
            </div>
            <div class="form-group">
                <label for="body">Body:</label>
                <textarea class="form-control" id="body" name="body"></textarea>
                            </div>

        </form>
    </div>

</x-app-layout>
