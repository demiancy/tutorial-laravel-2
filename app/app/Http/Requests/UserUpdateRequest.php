<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class UserUpdateRequest extends FormRequest
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
        $user = $this->user;

        return [
            'name'     => ['required', 'string', "unique:users,name,$user->id", 'max:255'],
            'email'    => ['required', 'string', 'email:rfc,dns,filter', "unique:users,email,$user->id", 'max:255'],
            'password' => ['nullable', 'string','confirmed', Password::defaults()],
            'roles'    => ['array'],
            'roles.*'  => ['integer', 'min:1', 'exists:roles,id'],
        ];
    }
}
