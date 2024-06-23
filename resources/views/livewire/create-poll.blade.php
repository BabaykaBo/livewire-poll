<div>
    <form>
        <label >
            Poll title
        </label>
        <input type="text" wire:model.live="title" />
        <div class="mb-4">
            Current title: {{ $title }}
        </div>
        <button class="btn" wire:click.prevent="addOption" >Add Option</button>
        <div class="mb-4">
            <ul>
                @foreach ($options as $index => $option)
                <li>{{ $index }} - {{ $option }}</li>
            @endforeach
            </ul>
        </div>
    </form>
</div>
