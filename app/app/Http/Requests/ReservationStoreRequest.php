<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationStoreRequest extends FormRequest
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
            'first_name'   => 'required|string|max:255',
            'last_name'    => 'required|string|max:255',
            'email'        => 'required|string|max:255|email',
            'guest_number' => 'required|integer|min:1|max:10',
            'date'         => 'required|date|in_range_for_reservation|available_for_reservation',
            'phone'        => 'required|integer|min:1',
            'table_id'     => 'required|integer|min:1|exists:tables,id|space_for_guests',
        ];
    }
}
