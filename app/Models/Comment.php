<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['subject', 'body', 'article_id']; // доступные поля таблицы

    public function article() { // Отношение 'Комментарии относятся к Статье'
        return $this->belongsTo(Article::class);
    }
}
