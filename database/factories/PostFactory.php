<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Post;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class PostFactory extends Factory
{
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => fake()->title,
            "img" => fake()->imageUrl,
            "describe" => fake()->text,
            "status" => collect(
                [
                    Post::STATUS_DRAFT,
                    Post::STATUS_PUBLISED,
                ]
            )->random()
        ];
    }
}
