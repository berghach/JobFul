<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check() && Auth::user()->id == $this->post->user_id;
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
                'post_type' => ['required', 'in:job request,job offer,service request,service offer'],
                'title' => ['required', 'string', 'max:255'],
                'description' => ['required', 'string'],
                'industry' => ['required', 'string', 'max:255'],
                'function' => ['required', 'string', 'max:255'],
                'location' => ['required', 'string', 'max:255'],
                'section' => ['required', 'array'],
                'section.*.key' => ['required_with:section', 'string'],
                'section.*.value' => ['required_with:section', 'numeric'],
            ];
        }else{
            return [
                'post_type' => ['sometimes','required', 'in:job request,job offer,service request,service offer'],
                'title' => ['sometimes','required', 'string', 'max:255'],
                'description' => ['sometimes','required', 'string'],
                'industry' => ['sometimes','required', 'string', 'max:255'],
                'function' => ['sometimes','required', 'string', 'max:255'],
                'location' => ['sometimes','required', 'string', 'max:255'],
                'section' => ['sometimes','required', 'array'],
                'section.*.key' => ['sometimes', 'required_with:section', 'string'],
                'section.*.value' => ['sometimes', 'required_with:section', 'numeric'],
            ];
        }
    }
}
