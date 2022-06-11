<x-app-layout>
    <div class="px-4 py-6">
        <form method="POST" action="{{ route('home.write-post') }}">
            @csrf
            <div class="flex  items-center justify-between">
                <h1>Write a Post</h1>
                <x-btn.primary type="submit">Save Post</x-btn.primary>
            </div>
            <div>
                <textarea class="resize-y w-full text-3xl font-bold border-transparent focus:border-transparent focus:ring-transparent placeholder:text-gray-400" name="title" placeholder="Title" rows="1"></textarea>
            </div>
            <div>
                <textarea id="body" name="body"></textarea>
            </div>
        </form>
    </div>
</x-app-layout>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea#body',
        plugins: 'autoformat code',
        toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify',
        menubar: false,
        statusbar: false,
    });
</script>
