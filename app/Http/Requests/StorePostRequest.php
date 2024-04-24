<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // return true;
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'post_type' => ['required', 'in:job request,job offer,service request,service offer'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'industry' => ['required', 'string', 'max:255'],
            'function' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'section' => ['nullable', 'array'],
            'section.*.key' => ['required_with:section', 'string'],
            'section.*.value' => ['required_with:section', 'numeric'],
        ];
    }
    /**
     * Get data to be validated from the request.
     *
     * @return array<string, mixed>
     */
    public function validationData(): array
    {
        // Include the user_id derived from the authenticated user in the validation data
        return array_merge($this->all(), [
            'user_id' => Auth::id(),
        ]);
    }
}
