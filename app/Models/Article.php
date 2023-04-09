<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'img', 'slug']; // доступные поля таблицы
    //protected $guarded = []; // недоступные поля таблицы

    public function comments() { // отношение многие комментарии к одной статье
        return $this->hasMany(Comment::class);
    }

    public function state() { // отношение один к одному со статистикой
        return $this->hasOne(State::class);
    }

    public function tags() { // отношение многие ко многим с тегами
        return $this->belongsToMany(Tag::class);
    }
}
