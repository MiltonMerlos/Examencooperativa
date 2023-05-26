<?php

namespace Database\Factories;

use App\Models\Asociado;
use Illuminate\Database\Eloquent\Factories\Factory;

class AsociadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Asociado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codigo' => $this->faker->word,
        'nombre' => $this->faker->word,
        'apellido' => $this->faker->word,
        'direccion' => $this->faker->word,
        'email' => $this->faker->word,
        'telefono1' => $this->faker->randomDigitNotNull,
        'telefono2' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
