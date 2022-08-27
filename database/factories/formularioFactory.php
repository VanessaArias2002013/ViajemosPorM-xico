<?php

namespace Database\Factories;
use App\Models\formulario;
use Illuminate\Database\Eloquent\Factories\Factory;

class formularioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
protected $model=formulario::class;

    public function definition()
    {
        return [
            //
            'nombre'=>$this->faker->sentence(6,true),
            'descripcion'=>$this->faker->paragraph(),
            'ubicación'=>$this->faker->sentence(6,true),
            'como_llegar'=>$this->faker->sentence(2,true),
            'recomendaciones'=>$this->faker->paragraph(),
            'horarios_de_visitas'=>$this->faker->sentence(1,true),
            'restrincciones'=>$this->faker->paragraph(),
            'costo'=>$this->faker->sentence(2,true),
            'insertar_fotos'=>$this->faker->sentence(2,true),
        ];
    }
}
