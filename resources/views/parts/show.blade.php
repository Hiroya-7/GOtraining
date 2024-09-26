<div class="bg-base">
    <x-app-layout>
        <x-slot name="header">
            <div class="flex justify-center bg-sub mx-auto text-4xl py-3">Training</div>
        </x-slot>
        <div class='menus'>
            @foreach($menus as $menu)
                <div class="flex justify-center py-2 mx-auto text-2xl">
                    <div class="flex justify-center bg-main py-3 rounded-md w-1/4">
                        {{ $menu->name }}
                    </div>
                </div>
            @endforeach
        </div>
        <div class="flex justify-center py-2 mx-auto text-2xl">
            <a href='/parts/{{ $part->id }}/menus/create' class="w-1/4 flex justify-center py-3  bg-sub rounded-md text-white hover:bg-sub2 cursor-pointer transition-all transition-all duration-300">作成</a>
        </div>
        <div class="flex justify-center py-2 mx-auto text-2xl">
            <a class="w-1/4 flex justify-center py-3 bg-sub rounded-md hover:bg-sub2 cursor-pointer transition-all duration-300" href="/parts">戻る</a>
        </div>
    </x-app-layout>
</div>