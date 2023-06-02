<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\PurchaseItem;
use App\Models\User;

class PurchaseItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PurchaseItem::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'created_by' => User::factory(),
            'total' => $this->faker->word,
            'status' => $this->faker->word,
        ];
    }
}
