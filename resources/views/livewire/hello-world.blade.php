<div>
    <div class="text-center">
        <img class="inline-block h-16 w-16 rounded-full" src="{{ asset('/ralph.jpg') }}" alt="">
    </div>
    <div class="text-center">
        Hello {{ $name }}!
    </div>
    <div class="text-center">
        <input type="text" wire:model.debounce.500ms="name">
    </div>
</div>
