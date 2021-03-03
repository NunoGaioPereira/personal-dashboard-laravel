<div class="bg-white p-10 shadow w-1/4">
    <button wire:click="decrement" class="p-3 bg-blue-600 text-blue-50">-</button>
    <h2>{{ $this->tracker->title }}</h2>
    <h2>{{ $this->tracker->value }}</h2>
    <!-- <form wire:submit.prevent="increment"> -->
        <button wire:click="increment" class="p-3 bg-blue-600 text-blue-50">+</button>
    <!-- </form> -->
</div>
