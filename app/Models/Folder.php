<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'time_min'
    ];
    
    public function logs()
    {
        return $this->hasMany(Log::class);
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
