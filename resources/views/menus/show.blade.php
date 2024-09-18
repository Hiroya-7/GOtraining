<x-app-layout>
    <x-slot name="header">
        Training
    </x-slot>
    <div class='menus'>
        @foreach($menus as $menu)
            <div class='menus'>
                {{ $menus->name }}
                {{ $menu->weight }}kg
            </div>
        @endforeach
    </div>
    <a href='menus/create'>作成</a>
</x-app-layout>