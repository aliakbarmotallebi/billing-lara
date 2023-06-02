<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PurchaseStoreRequest extends FormRequest
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
            'created_by' => ['required', 'integer', 'exists:users,id'],
            'user_id' => ['required', 'integer', 'exists:customers,id'],
            'total' => ['nullable', 'string'],
            'status' => ['required', 'string'],
        ];
    }
}
