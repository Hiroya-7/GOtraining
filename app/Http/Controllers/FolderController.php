<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Folder;
use App\Models\Log;

class FolderController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        $folders = Folder::whereHas('logs.menu.part', function ($query) use ($user_id) {
                            $query->where('user_id', $user_id);
                        })->get();
        return view('folders.index')->with(['folders' => $folders]);
    }
}
