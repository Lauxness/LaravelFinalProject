<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarsRequest extends FormRequest
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
            'car_name'        => 'required|string|max:255',
            'car_description' => 'required|string',
            'car_category'    => 'required|string|max:100',
            'rates'           => 'required|string|max:100',
            'seats'           => 'required|integer|min:1',
            'status'          => 'required|string|in:Available,Maintainance',
            'car_image'       => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
