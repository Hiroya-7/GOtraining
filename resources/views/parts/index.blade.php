<x-app-layout>
    <x-slot name="header">
        Part一覧
    </x-slot>
    <div class='parts'>
        @foreach($parts as $part)
            <div class='part'>
                <a href = "/parts/{{ $part->id }}">{{ $part->name }}</a>
            </div>
        @endforeach
    </div>
    <a href='parts/create'>作成</a>
</x-app-layout>