<x-app-layout>
    <x-slot name="header">
        Training一覧
    </x-slot>
    <div class='menus'>
        @foreach($menus as $menu)
            <div class='menu'>
                <a href = "/menus/{{ $menu->id }}">{{ $menu->name }}</a>
            </div>
        @endforeach
    </div>
    <a href='menus/create'>作成</a>
</x-app-layout>