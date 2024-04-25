<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
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
        $method = $this->method();
        if ($method === 'PUT') {
            return [
                'company_name' => ['required', 'string', 'max:255'],
                'industry' => ['required', 'string', 'max:255'],
                'bio' => ['required', 'string'],
                'company_headquarter' => ['required', 'string', 'max:255'],
                'links' => ['required', 'array'],
                'links.*.name' => ['required_with:links', 'string'],
                'links.*.url' => ['required_with:links', 'string'],
                'logo' => ['required', 'file', 'max:255'],
            ];
        }else{
            return [
                'company_name' => ['sometimes','required', 'string', 'max:255'],
                'industry' => ['sometimes','required', 'string', 'max:255'],
                'bio' => ['sometimes','required', 'string'],
                'company_headquarter' => ['sometimes','required', 'string', 'max:255'],
                'links' => ['sometimes','required', 'array'],
                'links.*.name' => ['sometimes', 'required_with:links', 'string'],
                'links.*.url' => ['sometimes', 'required_with:links', 'string'],
                'logo' => ['sometimes','required', 'file', 'max:255'],
            ];
        }
    }
}
