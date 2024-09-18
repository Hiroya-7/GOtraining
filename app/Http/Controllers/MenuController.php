<?php

namespace App\Http\Controllers;

use App\Models\Part;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::where('user_id', Auth::id())->get();
        return view('menus.index')->with(['menus' => $menus]);
    }
    
    public function create(Part $part) 
    {
        return view('menus.create')->with(['part' => $part]);
    }
    
    public function store(Request $request, Menu $menu)
    {
        $input = $request['menu'];
        //dd($input);
        $menu->fill($input)->save();
        return redirect('/parts/' . $input['part_id']);
    }
    
    public function show(Menu $menu)
    {
        $menus = Menu::where('part_id', $part->id)->get();
        return view('parts.show')->with(['menus' => $menus, 'part' => $part]);
    }
}
?>
