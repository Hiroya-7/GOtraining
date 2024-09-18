<?php

namespace App\Http\Controllers;

use App\Models\Part;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PartController extends Controller
{
    public function index()
    {
        $parts = Part::where('user_id', Auth::id())->get();
        return view('parts.index')->with(['parts' => $parts]);
    }
    
    public function create() 
    {
        return view('parts.create');
    }
    
    public function store(Request $request, Part $part)
    {
        $input = $request['part'];
        $part->fill($input)->save();
        return redirect('/parts');
    }
    
    public function show(Part $part)
    {
        $menus = Menu::where('part_id', $part->id)->get();
        return view('parts.show')->with(['menus' => $menus, 'part' => $part]);
    }
}
?>
