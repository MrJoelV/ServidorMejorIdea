<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idea' => $this->faker->text(250),
            'nombre' => $this->faker->unique()->name(),
            'correo' => $this->faker->unique()->email(),
            'estado' => $this->faker->randomElement([1,2]),
            // 'remember_token' => Str::random(10),
        ];
    }
}
