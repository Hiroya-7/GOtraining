<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Follow;
use App\Models\Folder;

class FollowController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        // フォローしているユーザーのフォロー記録を取得
        $followeeIds = Follow::where('follower_id', $user_id)->pluck('followee_id');
        // フォローしているユーザーの筋トレ記録を取得（updated_atの順で並び替え）
        $folders = Folder::whereHas('logs.menu.part', function ($query) use ($followeeIds) {
            $query->whereIn('user_id', $followeeIds);
        })->orderBy('updated_at', 'desc')->get();
        // folders.indexビューにフォローしている人の記録を渡す
        return view('follows.index', compact('folders'));
    }
}
