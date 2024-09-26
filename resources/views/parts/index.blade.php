<div class="bg-base">
    <x-app-layout>
        <x-slot name="header">
            <div class="flex justify-center bg-sub mx-auto text-4xl py-3">Part一覧</div>
        </x-slot>
        @foreach($parts as $part)
            <div class="flex justify-center py-2 mx-auto text-2xl">
                <a class="flex justify-center bg-main py-3 rounded-md w-1/4 hover:bg-main2 cursor-pointer" href = "/parts/{{ $part->id }}">{{ $part->name }}</a>
            </div>
        @endforeach
        <div class="flex justify-center py-2 mx-autos text-2xl">
            <a href='parts/create' class="w-1/4 flex justify-center py-3  bg-sub rounded-md text-white hover:bg-sub2 cursor-pointer transition-all transition-all duration-300">作成</a>
        </div>
    </x-app-layout>
</div>