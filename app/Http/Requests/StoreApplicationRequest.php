<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class StoreApplicationRequest extends FormRequest
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
        return [
            'message' => ['required', 'string'],
            'files' => ['required', 'array'],
            'files.*.name' => ['required_with:files', 'string'],
            'files.*.url' => ['required_with:files', 'file'],
            'sections' => ['nullable', 'array'],
            'sections.*.key' => ['required_with:sections', 'string'], 
            'sections.*.value' => ['required_with:sections', 'string'], 
            'post_id' => ['required', 'exists:posts,id'],
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
