<div class="bg-base">
    <x-app-layout>
        <div class="bg-base">
            <x-slot name="header">
                <div class="flex justify-center bg-sub mx-auto text-4xl py-3">Training記録</div>
            </x-slot>
            
            @foreach($folders as $folder)
                <div class="flex justify-center py-3 bg-base">
                　　<div class="border-solid border-2 border-main2 w-1/4 bg-main">
                        <div class="flex justify-center py-2">
                            <img src="{{ $folder->logs->first()->menu->part->user->image_url }}" alt="ユーザー画像" class="w-12 h-12 rounded-full mr-2">
                            <span>{{ $folder->logs->first()->menu->part->user->name }}</span>
                        </div>
                　　　　<div class="flex justify-center">日時：{{ $folder->updated_at }}</div>
                    　　　　@foreach($folder->logs as $log)
                        　　　　<div class="flex justify-center">
                                    {{ $log->menu->name }}【{{ $log->menu->part->name }}】：{{ $log->weight }} kg  ×{{ $log->reps }}回 × {{ $log->set }}セット
                                </div>
                    　　　　@endforeach
                　　　　<div class="flex justify-center">トレーニング時間：{{ $folder->time_min }} 分</div>
                　　</div>
                </div>
            @endforeach
        </div>
    </x-app-layout>
</div>