<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check() && Auth::user()->role->name === 'admin';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'industry' => ['required', 'string', 'max:255'],
            'bio' => ['required', 'string'],
            'headquarter' => ['required', 'string', 'max:255'],
            'links' => ['nullable', 'array'],
            'links.*.url' => ['required_with:links', 'string'],
            'logo' => ['nullable', 'file', 'max:255'],
        ];
    }
}
