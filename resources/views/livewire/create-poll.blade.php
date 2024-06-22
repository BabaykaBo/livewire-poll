<div>
    <form>
        <label >
            Poll title
        </label>
        <input type="text" wire:model.live="title" />
        <div>
            Current title: {{ $title }}
        </div>
    </form>
</div>
