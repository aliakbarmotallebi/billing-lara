<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Customer;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'fullname' => $this->faker->regexify('[A-Za-z0-9]{200}'),
            'phone' => $this->faker->phoneNumber,
            'tel' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'address' => $this->faker->text,
        ];
    }
}
