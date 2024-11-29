<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function search(Request $request) 
    {  
        // 検索クエリを取得  
        $query = $request->input('query'); 
        // クエリが空でない場合、部分一致で検索を実行 
        if ($query) {  
            $users = User::where('name', 'like', '%' . $query . '%')->get(); 
    
        } else {
            $users = collect(); // 空のコレクションを返す
        } 
        // 検索結果をビューに渡す 
        return view('follows.result', ['users' => $users, 'query' => $query]); 
    }
}
