<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Product;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'image_url' => $this->faker->text,
            'description' => $this->faker->text,
            'category_id' => Category::factory(),
            'sell_price' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'buy_price' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'unit' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'barcode' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'sku' => $this->faker->uuid,
        ];
    }
}
