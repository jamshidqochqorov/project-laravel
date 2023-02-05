<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition()
    {
        $title = $this->faker->sentence(6,true);
        $slug = Str::substr(Str::lower(preg_replace('/\s+/','-',$title)),0,-1);

        return [
               'title'=>$title,
               'body'=>$this->faker->paragraph(100,true),
               'slug'=>$slug,
               'img'=>'https://via.placeholder.com/600/000000/FFFFFF/?text=Larvel%209',
               'created_at'=>$this->faker->dateTimeBetween(),
        ];
    }
}
