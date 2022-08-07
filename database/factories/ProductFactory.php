<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->randomElement([
                $this->model::PRODUCT_NANE_ONE, 
                $this->model::PRODUCT_NANE_TWO,
                $this->model::PRODUCT_NANE_THREE, 
                $this->model::PRODUCT_NANE_FOUR,
                $this->model::PRODUCT_NANE_FIVE,
            ]),
            'image' => $this->faker->randomElement([
                $this->model::PRODUCT_IMAGE_ONE, 
                $this->model::PRODUCT_IMAGE_TWO,
                $this->model::PRODUCT_IMAGE_THREE, 
                $this->model::PRODUCT_IMAGE_FOUR,
                $this->model::PRODUCT_IMAGE_FIVE,
            ]),
            'price' => $this->faker->randomElement([
                $this->model::PRODUCT_PRICE_ONE, 
                $this->model::PRODUCT_PRICE_TWO,
                $this->model::PRODUCT_PRICE_THREE, 
                $this->model::PRODUCT_PRICE_FOUR,
                $this->model::PRODUCT_PRICE_FIVE,
            ]),
        ];
    }
}
