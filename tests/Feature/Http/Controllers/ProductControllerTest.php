<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Sku;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ProductController
 */
class ProductControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view(): void
    {
        $products = Product::factory()->count(3)->create();

        $response = $this->get(route('product.index'));

        $response->assertOk();
        $response->assertViewIs('product.index');
        $response->assertViewHas('products');
    }


    /**
     * @test
     */
    public function create_displays_view(): void
    {
        $response = $this->get(route('product.create'));

        $response->assertOk();
        $response->assertViewIs('product.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ProductController::class,
            'store',
            \App\Http\Requests\ProductStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects(): void
    {
        $name = $this->faker->name;
        $category = Category::factory()->create();
        $sell_price = $this->faker->word;
        $buy_price = $this->faker->word;
        $sku = Sku::factory()->create();

        $response = $this->post(route('product.store'), [
            'name' => $name,
            'category_id' => $category->id,
            'sell_price' => $sell_price,
            'buy_price' => $buy_price,
            'sku' => $sku->id,
        ]);

        $products = Product::query()
            ->where('name', $name)
            ->where('category_id', $category->id)
            ->where('sell_price', $sell_price)
            ->where('buy_price', $buy_price)
            ->where('sku', $sku->id)
            ->get();
        $this->assertCount(1, $products);
        $product = $products->first();

        $response->assertRedirect(route('product.index'));
        $response->assertSessionHas('product.name', $product->name);
    }


    /**
     * @test
     */
    public function show_displays_view(): void
    {
        $product = Product::factory()->create();
        $products = Product::factory()->count(3)->create();

        $response = $this->get(route('product.show', $product));

        $response->assertOk();
        $response->assertViewIs('product.show');
        $response->assertViewHas('product');
        $response->assertViewHas('catefory');
    }
}
