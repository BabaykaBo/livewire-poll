<div>
    <form>
        <label >
            Poll title
        </label>
        <input type="text" wire:model.live="title">
        <div class="mb-4">
            Current title: {{ $title }}
        </div>
        <button class="btn" wire:click.prevent="addOption" >Add Option</button>
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
    </form>
</div>
