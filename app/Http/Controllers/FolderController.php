<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Folder;
use App\Models\Log;

class FolderController extends Controller
{
    public function index(Request $request)
    {
        $user_id = Auth::id(); 
        $query = Folder::query(); 
        if ($request->has('username') && !empty($request->input('username'))) { 
            $username = $request->input('username'); 
            $query->whereHas('logs.menu.part', function ($query) use ($user_id, $username) { 
                $query->where('user_id', $user_id) ->whereHas('user', function ($subQuery) use ($username) { 
                    $subQuery->where('name', 'like', "%{$username}%"); 
                }); 
            }); 
        } else { 
        // ユーザーネームの指定がなければ、通常のフォルダ一覧を取得 
        $query->whereHas('logs.menu.part', function ($query) use ($user_id) { 
            $query->where('user_id', $user_id); 
        }); 
        } 
        $folders = $query->get(); 
        return view('folders.index')->with(['folders' => $folders]);
    }
}
