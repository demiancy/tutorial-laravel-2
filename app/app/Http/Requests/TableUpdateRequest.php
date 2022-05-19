<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TableUpdateRequest extends FormRequest
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
        $table = $this->table;

        return [
            'name'         => "required|string|max:255|unique:tables,name,{$table->id}",
            'guest_number' => 'required|numeric|min:1',
            'status'       => 'required|string|max:255',
            'location'     => 'required|string|max:255',
        ];
    }
}
