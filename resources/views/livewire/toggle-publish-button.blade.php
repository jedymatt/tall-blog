<div>
    <x-button wire:loading.attr="disabled" wire:click.prevent="togglePublish" class="disabled:cursor-wait">
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
    </x-button>
</div>
