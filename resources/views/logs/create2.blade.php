<x-app-layout>
    <x-slot name="header">
        Training
    </x-slot>
    
    <form action="/log/create" method="POST">
        @php 
            $i = 0;
        @endphp
        @csrf
        @foreach($menus as $menu) 
            <div> 
                <label for="{{ $menu->id }}">{{ $menu->name }} ({{ $menu->part->name }})</label>
                <input type="checkbox" id={{ $menu->id }} name="menus[{{ $i }}][id]" value="{{ $menu->id }}">
                <label for="weight_{{ $menu->id }}">重量</label>
                <input type="text" id="weight_{{ $menu->id }}" name="menus[{{ $i }}][weight]">
                <label for="reps_{{ $menu->id }}">回数</label>
                <input type="number" id="reps_{{ $menu->id }}" name="menus[{{ $i }}][reps]">
                <label for="set_{{ $menu->id }}">セット</label>
                <input type="number"  id="set_{{ $menu->id }}" name="menus[{{ $i }}][set]">
            </div>
            @php
                $i += 1
            @endphp
        @endforeach
        <div id="container">
            <div id="time">00:00:00.000</div>
            <input type="hidden" name="time_min" id="timeInput" value="00:00:00.000">
            <div id="buttons">
              <input id="start" type="button" value="start">
              <input id="stop" type="button" value="stop">
              <input id="reset" type="button" value="reset">
            </div>
        </div>
        <input type="submit" value="Training終了" />
    </form>
    <script src="{{asset('/js/stoppwotch.js')}}"></script>
</x-app-layout>