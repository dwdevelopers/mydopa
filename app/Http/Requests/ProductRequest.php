<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        $id = $this->route('product')?->id ?? 'NULL';
        return [
        'category_id' => 'required|exists:categories,id',
        'name' => 'required|string|max:255|unique:products,name,' . $id,
        'description' => 'nullable|string',
        'price' => 'required|numeric|min:0',
        'status' => 'required|boolean',
        'image' => 'nullable|array',
        'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
