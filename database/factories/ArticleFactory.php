<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    protected $model = Article::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(6,true); // предложение из 6 слов
        // обрабатываем ЧПУ так, чтобы привести к нижнему регистру, заменив пробелы на '-' и убрав точку в конце
        $slug = Str::substr(Str::lower(preg_replace('/\s+/','-',$title)),0,-1);
        // возвращаем сгенерированную статью
        return [
            'title' => $title,
            'body' => $this->faker->paragraph(100,true), // рандомные 100 предложений
            'slug' => $slug,
            'img' => 'https://dummyimage.com/640x360/ebd834/000&text=Random+image', // URL генератора картинок
            'created_at' => $this->faker->dateTimeBetween('-1 years'), // рандомная дата (максимум год назад)
        ];
    }
}
