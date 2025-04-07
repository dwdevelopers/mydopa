<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class RatingRequest extends FormRequest
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
        $rules = [
            'name'       => 'required|string|max:255',
            // For the email field, set different rules based on the HTTP method
            'email'      => $this->isMethod('post')
                ? 'required|email|max:255|unique:ratings_and_reviews,email'
                : [
                    'required',
                    'email',
                    'max:255',
                    // When updating, ignore the current review's email
                    Rule::unique('ratings_and_reviews', 'email')->ignore($this->route('review')->id),
                ],
            'phone'      => 'required|string|max:20',
            'title'      => 'required|string|max:255',
            'review'     => 'required|string',
            'rating'     => 'required|integer|min:1|max:5',
            'product_id' => 'required|integer',
            'status'     => 'sometimes|boolean',
        ];

        // For update requests, make fields optional (except status)
        if ($this->isMethod('put') || $this->isMethod('patch')) {
            foreach ($rules as $field => $rule) {
                if ($field !== 'status') {
                    if (is_array($rule)) {
                        $rules[$field] = array_merge(['sometimes'], $rule);
                    } else {
                        $rules[$field] = 'sometimes|' . $rule;
                    }
                }
            }
        }

        return $rules;

    }
}
