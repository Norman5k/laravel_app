<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        $tags = \App\Models\Tag::factory(15)->create(); // создаём 15 тегов

        $articles = \App\Models\Article::factory(30)->create(); // создаём 30 статей

        $tags_id = $tags->pluck('id'); // массив id тегов

        $articles->each(function ($article) use ($tags_id) { // для каждой статьи
           $article->tags()->attach($tags_id->random(3)); // задаём 3 случайных тега
           \App\Models\Comment::factory(5)->create([
               'article_id' => $article->id // создаём 5 комментов
           ]);

           \App\Models\State::factory(1)->create([
               'article_id' => $article->id // создаём 1 статистику
           ]);
        });
    }
}
