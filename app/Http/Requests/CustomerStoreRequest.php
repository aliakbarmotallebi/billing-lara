<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerStoreRequest extends FormRequest
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
            'fullname' => ['required', 'string', 'max:200'],
            'phone' => ['required', 'string', 'max:11'],
            'tel' => ['nullable', 'string', 'max:10'],
            'address' => ['nullable', 'string'],
        ];
    }
}
