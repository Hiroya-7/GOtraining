<div class="bg-base">
    <x-app-layout>
        <x-slot name="header">
            <div class="flex justify-center bg-sub mx-auto text-4xl py-3">Training</div>
        </x-slot>
        
        <form action="/log/create2" method="GET">
            @csrf
            @foreach($menus as $menu) 
                <div class="flex justify-center py-2 mx-auto">
                    <div class="justify-center bg-main py-3 px-3 rounded-md w-1/4 hover:bg-main2 text-2xl"> 
                        <div class="flex justify-center items-center">
                            <div class="px-2">
                                <input class="cursor-pointer" type="checkbox" name="menus[]" value="{{ $menu->id }}">
                            </div>
                            <label>{{ $menu->name }} ({{ $menu->part->name }})</label>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="flex justify-center py-2 mx-auto text-2xl">
                <button type="submit" class="w-1/4 flex justify-center py-3 bg-sub rounded-md hover:bg-sub2 cursor-pointer transition-all duration-300">開始</button>
            </div>
        </form>
    </x-app-layout>
</div>