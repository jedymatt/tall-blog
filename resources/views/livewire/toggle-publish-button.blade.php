<div>
    <button wire:loading.attr="disabled" wire:click.prevent="togglePublish"
        class="bg-indigo-500 hover:bg-indigo-700 text-white py-1.5 px-3 rounded-md text-sm
                        focus:ring focus:ring-indigo-200/50 inline-flex justify-center items-center">
        <span wire:loading.remove>
            @if ($post->isPublished())
                {{ $buttonTextFallback }}
            @else
                {{ $buttonText }}
            @endif
        </span>
        <span wire:loading>
            Loading...
        </span>
    </button>
</div>
