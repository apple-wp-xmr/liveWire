<div>
    <p>hello and show me time pls {{ now()->format('H:i:s.u') }}</p>
    <button wire:click="$refresh">Refresh</button>
</div>
