<div class="bg-base">
    <x-app-layout>
        <div class="bg-base">
            <x-slot name="header">
                <div class="flex justify-center bg-sub mx-auto text-4xl py-3">Part作成</div>
            </x-slot>
            <form action="/parts" method="POST">
                @csrf
                <div class="flex justify-center py-12 mx-auto">
                    <div class="flex justify-center bg-main py-3 rounded-md w-1/4">
                        <input class="hover:bg-base" type="text" name="part[name]" placeholder="部位名" />
                        <input type="hidden" name="part[user_id]" value="{{ Auth::id() }}" />
                        <div class="px-3">
                            <input class="px-3 py-3 border-solid border-2 border-main2 cursor-pointer" type="submit" value="保存" />
                        </div>
                    </div>
                </div>
            </form>
            <div class="flex justify-center py-2 mx-auto text-2xl">
                <a class="w-1/4 flex justify-center py-3 bg-sub rounded-md hover:bg-sub2 cursor-pointer transition-all duration-300" href="/parts">戻る</a>
            </div>
        </div>
    </x-app-layout>
</div>