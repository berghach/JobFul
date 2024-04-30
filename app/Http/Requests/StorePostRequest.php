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
        return Auth::check() && Auth::user()->role->name !== 'admin';
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
            'contract' => ['nullable', 'string', 'max:255'],
            'job_type' => ['nullable', 'string', 'max:255'],
            'study_level' => ['nullable', 'string', 'max:255'],
            'price' => ['nullable', 'numeric', 'max:255'],
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
