<div class="bg-base">
    <x-app-layout>
        <div class="bg-base">
            <x-slot name="header">
                <div class="flex justify-center bg-sub mx-auto text-4xl py-3">Training記録</div>
            </x-slot>
            
            @extends('layouts.app')
            @section('content')
            <!-- 検索フォーム -->
            <form action="{{ route('users.search') }}" method="GET" class="mb-4">
                <div class="form-group">
                    <input type="text" name="query" class="form-control" value="{{ request('query') }}" placeholder="ユーザー名で検索">
                </div>
                <button type="submit" class="btn btn-primary mt-2">検索</button>
            </form>
            @if ($users->isNotEmpty()) 
            <h3>検索結果</h3> 
            <ul class="list-group"> 
            @foreach ($users as $user) 
            <li class="list-group-item"> {{ $user->name }} </li> 
            @endforeach 
            </ul> 
            @else 
            <p>検索結果が見つかりませんでした。</p> 
            @endif
        </div>
    </x-app-layout>
</div>