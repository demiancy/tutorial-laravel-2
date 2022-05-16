<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $category = $this->category;

        return [
            'name'        => "required|string|max:255|unique:categories,name,{$category->id}",
            'image'       => 'image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'required|string',
        ];
    }
}
