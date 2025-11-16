<div>
    <h1 class="text-2xl font-bold">{{ $count }}</h1>

    <x-flux::button class="bg-green-500 text-white rounded px-4 py-2" wire:click="increment">+</x-flux::button>

    <x-flux::button class="bg-red-500 text-white rounded px-4 py-2" wire:click="decrement">-</x-flux::button>
</div>