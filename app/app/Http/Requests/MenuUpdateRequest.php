<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuUpdateRequest extends FormRequest
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
        $menu = $this->menu;

        return [
            'name'         => "required|string|max:255|unique:menus,name,{$menu->id}",
            'image'        => 'image|mimes:jpeg,png,jpg|max:2048',
            'price'        => 'required|numeric|min:0',
            'description'  => 'required|string',
            'categories'   => 'required|array',
            'categories.*' => 'integer|min:1|exists:categories,id',
        ];
    }
}
