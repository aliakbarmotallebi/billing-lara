<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:400'],
            'image_url' => ['nullable', 'string'],
            'description' => ['nullable', 'string'],
            'category_id' => ['required', 'integer', 'exists:categories,id'],
            'sell_price' => ['required', 'string', 'max:400'],
            'buy_price' => ['required', 'string', 'max:400'],
            'unit' => ['nullable', 'string', 'max:400'],
            'barcode' => ['nullable', 'string', 'max:400'],
            'sku' => ['required'],
        ];
    }
}
