<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id(); // AI & unsignedInt поле
            $table->string('title')->unique(); // заголовок статьи
            $table->string('slug')->unique(); // ЧПУ
            $table->text('body'); // тело
            $table->string('img'); // изображение
            $table->timestamps(); // поля created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
