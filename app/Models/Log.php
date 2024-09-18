<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'menu_id',
        'folder_id',
        'weight',
        'reps',
        'set'
    ];
    
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
    
    public function folder()
    {
        return $this->belongsTo(Folder::class);
    }
}
