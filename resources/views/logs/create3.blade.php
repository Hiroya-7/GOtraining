<x-app-layout>
    <x-slot name="header">
        Logs
    </x-slot>
    
    <form action="/log/create3" method="GET">
        @csrf
        @foreach($menus as $menu) 
            <div> 
                <input type="text" name="logs[]" value="{{ $log->id }}">
            </div>
        @endforeach
        <button type="submit">戻る</button>
    </form>
</x-app-layout>