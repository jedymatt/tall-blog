<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->words(asText: true);

        return [
            'title' => Str::title($title),
            'slug' => Str::slug($title),
            'body' => $this->faker->paragraphs(asText: true),
            'user_id' => \App\Models\User::factory()->create()->id,
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
