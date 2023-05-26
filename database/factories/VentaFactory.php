<?php

namespace Database\Factories;

use App\Models\Venta;
use Illuminate\Database\Eloquent\Factories\Factory;

class VentaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Venta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fecha_probable' => $this->faker->word,
        'fecha_contacto' => $this->faker->word,
        'acuerdo' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'estado_venta' => $this->faker->randomElement(]),
        'producto_id' => $this->faker->randomDigitNotNull,
        'asociado_id' => $this->faker->randomDigitNotNull,
        'users_id' => $this->faker->randomDigitNotNull
        ];
    }
}
