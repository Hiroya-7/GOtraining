<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'part_id',
        'name',
        'record',
        'goal'
    ];
    
    public function part()
    {
        return $this->belongsTo(Part::class);
    }
    
    public function logg()
    {
        return $this->hasOne(Log::class);
    }
}
