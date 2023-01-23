<?php

namespace Database\Factories;

use App\Models\TodoItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class TodoItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = TodoItem::class;
    public function definition()
    {
        return [
            'description'=>$this->faker->text(60),
            'status'=>'pending'
        ];
    }
}
