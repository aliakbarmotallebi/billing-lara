<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Customer;
use App\Models\Purchase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\PurchaseController
 */
class PurchaseControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view(): void
    {
        $purchases = Purchase::factory()->count(3)->create();

        $response = $this->get(route('purchase.index'));

        $response->assertOk();
        $response->assertViewIs('purchase.index');
        $response->assertViewHas('purchases');
    }


    /**
     * @test
     */
    public function create_displays_view(): void
    {
        $response = $this->get(route('purchase.create'));

        $response->assertOk();
        $response->assertViewIs('purchase.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PurchaseController::class,
            'store',
            \App\Http\Requests\PurchaseStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects(): void
    {
        $created_by = User::factory()->create();
        $user = Customer::factory()->create();
        $status = $this->faker->word;

        $response = $this->post(route('purchase.store'), [
            'created_by' => $created_by->id,
            'user_id' => $user->id,
            'status' => $status,
        ]);

        $purchases = Purchase::query()
            ->where('created_by', $created_by->id)
            ->where('user_id', $user->id)
            ->where('status', $status)
            ->get();
        $this->assertCount(1, $purchases);
        $purchase = $purchases->first();

        $response->assertRedirect(route('purchase.index'));
        $response->assertSessionHas('purchase.name', $purchase->name);
    }
}
