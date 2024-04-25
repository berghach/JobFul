<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequest extends FormRequest
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
            'company_name' => ['required', 'string', 'max:255'],
            'industry' => ['required', 'string', 'max:255'],
            'bio' => ['required', 'string'],
            'company_headquarter' => ['required', 'string', 'max:255'],
            'links' => ['nullable', 'array'],
            'links.*.name' => ['required_with:links', 'string'],
            'links.*.url' => ['required_with:links', 'string'],
            'logo' => ['required', 'file', 'max:255'],
        ];
    }
}
