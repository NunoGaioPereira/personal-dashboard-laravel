<div class="bg-white p-10 shadow max-w-sm rounded-lg">
    <h2 class="font-bold text-2xl text-gray-900">{{ $this->tracker->title }}</h2>
    <p>{{ $this->tracker->description }}</p>
    
    <!-- <form wire:submit.prevent="increment"> -->
    <div class="justify-between w-full">
        <button wire:click="decrement" class="w-8 h-8 font-bold bg-black text-white rounded-md">-</button>
        <h2 class="inline-block">{{ $this->tracker->value }}</h2>
        <button wire:click="increment" class="w-8 h-8 font-bold bg-black text-white rounded-md">+</button>
    </div>
    <!-- </form> -->
</div>
