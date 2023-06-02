<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\InvoiceController
 */
class InvoiceControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view(): void
    {
        $invoices = Invoice::factory()->count(3)->create();

        $response = $this->get(route('invoice.index'));

        $response->assertOk();
        $response->assertViewIs('invoice.index');
        $response->assertViewHas('invoices');
    }


    /**
     * @test
     */
    public function create_displays_view(): void
    {
        $response = $this->get(route('invoice.create'));

        $response->assertOk();
        $response->assertViewIs('invoice.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\InvoiceController::class,
            'store',
            \App\Http\Requests\InvoiceStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects(): void
    {
        $created_by = User::factory()->create();
        $customer = Customer::factory()->create();
        $status = $this->faker->word;

        $response = $this->post(route('invoice.store'), [
            'created_by' => $created_by->id,
            'customer_id' => $customer->id,
            'status' => $status,
        ]);

        $invoices = Invoice::query()
            ->where('created_by', $created_by->id)
            ->where('customer_id', $customer->id)
            ->where('status', $status)
            ->get();
        $this->assertCount(1, $invoices);
        $invoice = $invoices->first();

        $response->assertRedirect(route('invoice.index'));
        $response->assertSessionHas('invoice.name', $invoice->name);
    }
}
