<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TenantUpdateRequest extends FormRequest
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
            'companyName' => 'required|string|max:255',
            'email' => 'required|email',
            'domain' => 'required|string|max:255',
            'plan' => 'required|in:free,standard,premium',
            'isPaused' => 'required|boolean',
        ];
    }
}
