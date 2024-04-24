<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateApplicationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
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
                'message' => ['required', 'string'],
                'files' => ['required', 'array'],
                'files.*.name' => ['required_with:files', 'string'],
                'files.*.url' => ['required_with:files', 'string'],
                'sections' => ['nullable', 'array'],
                'sections.*.key' => ['required_with:sections', 'string'], 
                'sections.*.value' => ['required_with:sections', 'string'],     
            ];
        }else{
            return [
                'message' => ['sometimes','required', 'string'],
                'files' => ['sometimes','required', 'array'],
                'files.*.name' => ['sometimes','required_with:files', 'string'],
                'files.*.url' => ['sometimes','required_with:files', 'string'],
                'sections' => ['sometimes','nullable', 'array'],
                'sections.*.key' => ['sometimes','required_with:sections', 'string'], 
                'sections.*.value' => ['sometimes','required_with:sections', 'string'],     
            ];
        }
    }
}
