<x-app-layout>
    <x-slot name="header">
        part作成
    </x-slot>
    
    <form action="/parts" method="POST">
        @csrf
        <div class="name">
             <input type="text" name="part[name]" placeholder="部位名" />
             <input type="hidden" name="part[user_id]" value="{{ Auth::id() }}" />
             <input type="submit" value="保存" />
        </form>
    <div class="back">[<a href="/parts">戻る</a>]</div>
</x-app-layout>