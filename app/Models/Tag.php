<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['label'];

    public $timestamps = false; // Явно указываем, что timestamps не создаются

    public function articles() { // отношение многие ко многим со статьями
        return $this->belongsToMany(Article::class);
    }
}
