<?php

namespace Database\Factories;

use App\Models\Format;
use App\Models\Genre;
use App\Models\Location;
use App\Models\Type;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DVD>
 */
class DVDFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'user_id' => User::factory(),
            'format_id' => Format::factory(),
            'type_id' => Type::factory(),
            'location_id' => Location::factory(),
            'genre_id' => Genre::factory(),
            'slug' => $this->faker->slug(),
            'name' => $this->faker->sentence(),
            'image_url' => $this->faker->imageUrl($width = 640, $height = 480, 'movies'),
            'offical_website' => $this->faker->url(),
            'imdb' => $this->faker->url(),
            'disc' => $this->faker->randomDigit(3),
            'rating' => $this->faker->word()
        ];
    }
}

// $table->id();
//             $table->integer('disc');
//             $table->text('rating');

// 'body' => '<p>' .  implode('</p><p>', $this->faker->paragraphs(6)) . '</p>'
