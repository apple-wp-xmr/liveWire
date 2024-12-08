<div>
    <form wire:submit='add'>
        <input type="text" wire:model.live='todo'>
        <button type='submit'>Add</button>
    </form>
    <p>{{ $todo }}</p>
    <hr>
    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>

</div>
