<div class="bg-base">
    <x-app-layout>
        <x-slot name="header">
            <div class="flex justify-center bg-sub mx-auto text-4xl py-3">Training</div>
        </x-slot>
        
        <form action="/log/create" method="POST">
            @php 
                $i = 0;
            @endphp
            @csrf
            @foreach($menus as $menu) 
            <div class="py-2">
                <div class="flex justify-center bg-main items-center px-3 py-3 rounded-md hover:bg-main2 text-2xl"> 
                    <div class="px-4">
                        <label for="{{ $menu->id }}">{{ $menu->name }} ({{ $menu->part->name }})</label>
                        <input type="checkbox" id={{ $menu->id }} name="menus[{{ $i }}][id]" value="{{ $menu->id }}">
                        <label for="weight_{{ $menu->id }}">重量</label>
                        <input type="text" id="weight_{{ $menu->id }}" name="menus[{{ $i }}][weight]">
                        <label for="reps_{{ $menu->id }}">回数</label>
                        <input type="number" id="reps_{{ $menu->id }}" name="menus[{{ $i }}][reps]">
                        <label for="set_{{ $menu->id }}">セット</label>
                        <input type="number"  id="set_{{ $menu->id }}" name="menus[{{ $i }}][set]">
                    </div>
                </div>
            </div>
                @php
                    $i += 1
                @endphp
            @endforeach
            <div class="flex justify-center">
                <div id="container" class="text-2xl w-1/4 justify-center py-3 bg-main rounded-md text-white hover:bg-main2">
                    <div id="time" class="flex justify-center">00:00:00.000</div>
                    <input type="hidden" name="time_min" id="timeInput" value="00:00:00.000">
                    <div id="buttons" class="px-2">
                        <div class="flex justify-center">
                            <div class="border-solid border-2 border-sub px-3">
                                <input id="start" type="button" value="start">
                            </div>
                            <div class="border-solid border-2 border-sub px-3">
                                <input id="stop" type="button" value="stop">
                            </div>
                            <div class="border-solid border-2 border-sub px-3">
                                <input id="reset" type="button" value="reset">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center py-2 mx-auto">
                <input type="submit"  class="w-1/4 flex justify-center py-3  bg-sub rounded-md text-white hover:bg-sub2 cursor-pointer transition-all duration-300" value="Training終了" />
            </div>
            <div class="flex justify-center py-2 mx-auto">
                <a class="w-1/4 flex justify-center py-2 bg-sub rounded-md text-white hover:bg-sub2 cursor-pointer transition-all duration-300" href="/log/create">戻る</a>
            </div>
        </form>
        <script src="{{asset('/js/stoppwotch.js')}}"></script>
    </x-app-layout>
</div>