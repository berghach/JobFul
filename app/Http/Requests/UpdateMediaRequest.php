<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class UpdateMediaRequest extends FormRequest
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
                'name' => ['required', 'string'],
                'path' => ['required', 'string'],
                'type' => ['required', 'string'],
            ];
        }else{
            return [
                'name' => ['sometimes','required', 'string'],
                'path' => ['sometimes','required', 'string'],
                'type' => ['sometimes','required', 'string'],
            ];
        }
    }
}
