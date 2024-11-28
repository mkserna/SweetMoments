<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255|unique:categories,name,' . $this->category,
            'description' => 'nullable|string|max:600',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The name is required.',
            'name.unique' => 'The name is already in use.',
            'name.max' => 'It went over the limit.',
            'description.max' => 'The description cannot exceed 1000 characters.',
        ];
    }
}
