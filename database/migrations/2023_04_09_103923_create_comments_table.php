<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('subject'); // тема комментария
            $table->text('body'); // его тело
            // $table->unsignedBigInteger('article_id');
            $table->foreignId('article_id')->constrained()->onDelete('cascade'); // ссылка на статью
            $table->timestamps(); // даты создания и обновления
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
