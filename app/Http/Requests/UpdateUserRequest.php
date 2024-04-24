<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
        if ($method == 'PUT'){
            return [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'phone' => ['required', 'string', 'max:255'],
                'links' => ['nullable','array'],
                'links.*.name' => ['required_with:links', 'string'],
                'links.*.url' => ['required_with:links', 'string'],
                'industry' => ['required', 'string', 'max:255'],
                'bio' => ['required', 'string'],
                'location' => ['required', 'string', 'max:255'],
                'job' => ['required', 'string', 'max:255'],
                'talent_type' => ['required', 'string', 'in:freelancer,contractor'],
                'sections' => ['nullable','array'],
                'sections.*.key' => ['required_with:sections', 'string'],
                'sections.*.value' => ['required_with:sections', 'string'],
            ];
        }else{
            return [
                'name' => ['sometimes','required', 'string', 'max:255'],
                'email' => ['sometimes','required', 'string', 'email', 'max:255'],
                'phone' => ['sometimes','required', 'string', 'max:255'],
                'links' => ['sometimes','required','array'],
                'links.*.name' => ['sometimes','required', 'string'],
                'links.*.url' => ['sometimes','required', 'string'],
                'industry' => ['sometimes','required', 'string', 'max:255'],
                'bio' => ['sometimes','required', 'string'],
                'location' => ['sometimes','required', 'string', 'max:255'],
                'job' => ['sometimes','required', 'string', 'max:255'],
                'talent_type' => ['sometimes','required', 'string', 'enum:freelancer,contractor'],
                'sections' => ['sometimes','required','array'],
                'sections.*.key' => ['sometimes','required', 'string'],
                'sections.*.value' => ['sometimes','required', 'string'],
            ];
        }
    }
}
