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
                'contract' => ['required', 'string', 'max:255'],
                'job_type' => ['required', 'string', 'max:255'],
                'study_level' => ['required', 'string', 'max:255'],
                'price' => ['required', 'numeric', 'max:255'],
                'deadline' => ['required', 'date'],
                ];
        }else{
            return [
                'post_type' => ['sometimes','required', 'in:job request,job offer,service request,service offer'],
                'title' => ['sometimes','required', 'string', 'max:255'],
                'description' => ['sometimes','required', 'string'],
                'industry' => ['sometimes','required', 'string', 'max:255'],
                'function' => ['sometimes','required', 'string', 'max:255'],
                'location' => ['sometimes','required', 'string', 'max:255'],
                'contract' => ['sometimes','required', 'string', 'max:255'],
                'job_type' => ['sometimes','required', 'string', 'max:255'],
                'study_level' => ['sometimes','required', 'string', 'max:255'],
                'price' => ['sometimes','required', 'numeric', 'max:255'],
                'deadline' => ['sometimes','required', 'date'],
            ];
        }
    }
}
