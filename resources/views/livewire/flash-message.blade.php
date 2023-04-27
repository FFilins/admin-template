
<div>
    @if ($message)
        <div id="mensagem" wire:poll.5000ms="reloadMessage" class="alert alert-{{ $type }}">
            {{ $message }}
        </div>
    @endif
</div>
