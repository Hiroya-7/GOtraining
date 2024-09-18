<x-app-layout>
    <x-slot name="header">
        menu作成
    </x-slot>
    
    <form action="/menus" method="POST">
        @csrf
        <div class="name">
             <input type="text" name="menu[name]" placeholder="トレーニング名" />
             <input type="hidden" name="menu[part_id]" value="{{ $part->id }}" />
             <input type="submit" value="保存" />
        </form>
    <div class="back">[<a href="/menus">戻る</a>]</div>
</x-app-layout>