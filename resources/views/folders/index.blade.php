<x-app-layout>
    <x-slot name="header">
        Training記録
    </x-slot>
    
    @foreach($folders as $folder)
    　　<div class="border-solid border-2 border-indigo-600">
    　　　　<div class="date">日時：{{ $folder->updated_at }}</div>
        　　　　@foreach($folder->logs as $log)
            　　　　<div class="menu">
                        {{ $log->menu->name }}【{{ $log->menu->part->name }}】：{{ $log->weight }} kg  ×{{ $log->reps }}回 × {{ $log->set }}セット
                    </div>
        　　　　@endforeach
    　　　　<div class="time">トレーニング時間：{{ $folder->time_min }} 分</div>
    　　</div>
    @endforeach
</x-app-layout>