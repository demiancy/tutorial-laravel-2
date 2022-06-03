<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class UserStoreRequest extends FormRequest
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
        return [
            'name'     => ['required', 'string', 'unique:users,name', 'max:255'],
            'email'    => ['required', 'string', 'email:rfc,dns,filter', 'unique:users,email', 'max:255'],
            'password' => ['required', 'string','confirmed', Password::defaults()],
            'roles'    => ['array'],
            'roles.*'  => ['integer', 'min:1', 'exists:roles,id'],
        ];
    }
}
