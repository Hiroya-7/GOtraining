<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Menu;
use App\Models\Part;
use App\Models\Folder;
use App\Models\Log;

class LogController extends Controller
{
    public function create()
    {
        $parts = Part::where('user_id', Auth::id())->get();
        $menus = [];
    
        foreach ($parts as $part) {
            // 各partに対応するmenusを取得
            $partMenus = Menu::where('part_id', $part->id)->get();
    
            // 各Menuモデルを$menus配列に個別に追加
            foreach ($partMenus as $menu) {
                array_push($menus, $menu);
            }
        }
    
        // デバッグのための出力
        //dd($menus);
    
        return view('logs.create')->with(['menus' => $menus]);
    }
    
    public function create2( Request $request )
    {
        $menu_id = $request['menus'];
        $menus = Menu::find($menu_id);
        //dd($menus);
        return view('logs.create2')->with(['menus' => $menus]);
    }
    
    public function store(Request $request)
    {
        // dd($request);
        // 分に変換
        $time = $request->input('time_min');
        list($hours, $minutes, $secondsAndMs) = explode(':', $time); 
        $time_min = (int)$hours * 60 + (int)$minutes;
        
        $finishMenus = $request["menus"];
        
        $folder = new Folder();
        $folder->time_min = $time_min;
        $folder->save();
        foreach($finishMenus as $finishMenu) 
        {
            // dd($finishMenu);
            $log = new Log();
            $log->menu_id = $finishMenu["id"];
            $log->folder_id = $folder->id;
            $log->weight = $finishMenu["weight"];
            $log->reps = $finishMenu["reps"];
            $log->set = $finishMenu["set"];
            $log->save();
            // dd($folder);
        }
    return redirect('/parts');
    }
}
?>