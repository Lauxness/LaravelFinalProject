<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TenantStoreRequest extends FormRequest
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
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:tenants,data->email',
            'address' => 'required|string|max:255',
            'companyName' => 'required|string|max:255',
            'domain' => 'required|string|unique:tenants,data->domain|max:255',
            'isPaused' => 'required|boolean',
            'plan' => 'required|in:free,standard,premium'
        ];
    }
}
