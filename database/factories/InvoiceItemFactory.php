<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\Product;

class InvoiceItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InvoiceItem::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'invoice_id' => Invoice::factory(),
            'product_id' => Product::factory(),
            'price' => $this->faker->word,
            'quantity' => $this->faker->word,
            'total' => $this->faker->word,
        ];
    }
}
