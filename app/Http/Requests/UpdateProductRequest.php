<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
    public function rules(): array {
        return [
            'name' => 'required|string|max:255|unique:products,name,' . $this->route('product')->id, 
            'description' => 'nullable|string', 
            'price' => 'required|numeric', 
            'image' => 'nullable|string', 
            'size_id' => 'required|exists:sizes,id',
            'category_id' => 'required|exists:categories,id',
        ];
    }
    
    /**
     * Get custom messages for validation errors.
     */
    public function messages(): array {
        return [
            'name.required' => 'The product name is required.',
            'name.unique' => 'The product name must be unique, except for the current product.',
            'price.required' => 'The price is required.',
            'price.numeric' => 'The price must be a numeric value.',
            'size_id.required' => 'The size is required.',
            'size_id.exists' => 'The selected size is not valid.',
            'category_id.required' => 'The category is required.',
            'category_id.exists' => 'The selected category is not valid.',
        ];
    }
    
}
