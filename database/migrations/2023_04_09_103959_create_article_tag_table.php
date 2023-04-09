<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_tag', function (Blueprint $table) { // таблица-связка тегов со статьями
            $table->unsignedBigInteger('article_id'); // ссылка на статью
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade'); // внешний ключ на таблицу articles
            $table->foreignId('tag_id')->constrained()->onDelete('cascade'); // второй вариант создания внешнего ключа
            //$table->unsignedBigInteger('tag_id'); // ссылка на тег
            //$table->foreign('tag_id')->references('id')->on('tags'); // внешний ключ на таблицу tags
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_tag');
    }
}
