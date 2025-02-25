<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Route;

class RouteFactory extends Factory
{
    protected $model = Route::class; // Asociar el factory al modelo

    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement([
                'Sendero del Bosque', 
                'Ruta del Sol', 
                'Camino de los Andes', 
                'Travesía del Norte', 
                'Vereda del Silencio'
            ]),
            'description' => $this->faker->sentence(10),
            'difficulty' => $this->faker->numberBetween(1, 10),
            'type' => $this->faker->randomElement(['Hiking', 'Cycling', 'Climbing', 'Running']),
            'zone' => $this->faker->city, 
            'imageMap' => $this->faker->company,
            'coordinateStart' => [
                'lat' => $this->faker->latitude,
                'lng' => $this->faker->longitude
            ],
            'coordinateEnd' => [
                'lat' => $this->faker->latitude,
                'lng' => $this->faker->longitude
            ]
        ];
    }
}
