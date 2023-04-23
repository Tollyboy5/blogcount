<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Article;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    protected $model = Article::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title' => $this->faker->words(5, true),
            'description' => $this->faker->sentence(45),
            'likes' => $this->faker->randomNumber(3),
            'views' => $this->faker->randomNumber(3),
            'tag' => $this->faker->words(3, true)
        ];
    }
}
