<x-app-layout>
    <x-slot name="header">
        Training開始
    </x-slot>
    
    <form action="/log/create2" method="GET">
        @csrf
        @foreach($menus as $menu) 
            <div> 
                <input type="checkbox" name="menus[]" value="{{ $menu->id }}">
                <label>{{ $menu->name }} ({{ $menu->part->name }})</label>
            </div>
        @endforeach
        <button type="submit">開始</button>
    </form>
</x-app-layout>