<div class="bg-base">
    <x-app-layout>
        <x-slot name="header">
            <div class="flex justify-center bg-sub mx-auto text-4xl py-3">Follow</div>
        </x-slot>
        
        <form action="/follow" method="GET">
            @csrf
            @foreach($follows as $follow) 
                
            @endforeach
        </form>
    </x-app-layout>
</div>