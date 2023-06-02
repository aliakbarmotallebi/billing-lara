<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Customer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CustomerController
 */
class CustomerControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view(): void
    {
        $customers = Customer::factory()->count(3)->create();

        $response = $this->get(route('customer.index'));

        $response->assertOk();
        $response->assertViewIs('customer.index');
        $response->assertViewHas('customers');
    }


    /**
     * @test
     */
    public function create_displays_view(): void
    {
        $response = $this->get(route('customer.create'));

        $response->assertOk();
        $response->assertViewIs('customer.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CustomerController::class,
            'store',
            \App\Http\Requests\CustomerStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects(): void
    {
        $fullname = $this->faker->word;
        $phone = $this->faker->phoneNumber;

        $response = $this->post(route('customer.store'), [
            'fullname' => $fullname,
            'phone' => $phone,
        ]);

        $customers = Customer::query()
            ->where('fullname', $fullname)
            ->where('phone', $phone)
            ->get();
        $this->assertCount(1, $customers);
        $customer = $customers->first();

        $response->assertRedirect(route('customer.index'));
        $response->assertSessionHas('customer.name', $customer->name);
    }
}
