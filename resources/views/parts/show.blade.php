<x-app-layout>
    <x-slot name="header">
        Training
    </x-slot>
    <div class='menus'>
        @foreach($menus as $menu)
            <div class='menu'>
                {{ $menu->name }}
            </div>
        @endforeach
    </div>
    <a href='/parts/{{ $part->id }}/menus/create'>作成</a>
</x-app-layout>