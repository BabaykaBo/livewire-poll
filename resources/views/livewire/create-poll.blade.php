<div>
    <form wire:submit.prevent="createPoll">
        <label>
            Poll title
        </label>
        <input class="mb-4" type="text" wire:model.live="title">
        <button class="btn mb-4" wire:click.prevent="addOption" >Add Option</button>
        <div class="mb-4">
                @foreach ($options as $index => $option)
                <label>Option {{$index + 1}}</label>
                <div class="flex gap-2">
                    <input type="text" wire:model="options.{{ $index }}">
                    <button class="btn" wire:click.prevent="removeOption({{ $index }})">
                        Remove
                    </button>
                </div>
            @endforeach
        </div>
        <button class="btn mb-4" type="submit">Create Poll</button>
    </form>
</div>
