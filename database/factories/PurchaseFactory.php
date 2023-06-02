<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Customer;
use App\Models\Purchase;
use App\Models\User;

class PurchaseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Purchase::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'created_by' => User::factory(),
            'user_id' => Customer::factory(),
            'total' => $this->faker->word,
            'status' => $this->faker->word,
        ];
    }
}
