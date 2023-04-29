<div>
    <form wire:submit.prevent="save">
        <div>
            <input type="text" wire:model="title">
        </div>

        <div>
            <textarea wire:model="content"></textarea>
        </div>

        <button type="submit">保存</button>
    </form>
</div>
