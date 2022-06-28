<?php

namespace Modules\Article\Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Article\Entities\Category;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //'name'              => substr($this->faker->text(20), 0, -1),
            'name'              => 'Danh mục sản phẩm '.$this->faker->numberBetween(1, 20),
            'slug'              => '',
            'description'       => $this->faker->paragraph,
            'status'            => 1,
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ];
    }

    protected function randomTitle()
    {
        return substr($this->faker->text(20), 0, -1);
    }
}
