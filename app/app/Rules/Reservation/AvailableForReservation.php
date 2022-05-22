<?php

namespace App\Rules\Reservation;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Contracts\Validation\DataAwareRule;
use App\Models\Reservation;
use Carbon\Carbon;

class AvailableForReservation implements Rule, DataAwareRule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * All of the data under validation.
     *
     * @var array
     */
    protected array $data = [];

    /**
     * Set the data under validation.
     *
     * @param  array  $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value, $id = null)
    {
        //Determines if the selected table is available for the selected date and time.
        if (is_numeric($this->data['table_id'])) {
            //It is assumed that a table is occupied between 1 and 2 hours.
            $start = Carbon::parse($this->data['date'])->subHour();
            $end   = Carbon::parse($this->data['date'])->addHour();

            return !Reservation::where('table_id', $this->data['table_id'])
                ->whereBetween('date', [$start, $end])
                ->whereNot('id', $id)
                ->exists();
        }

        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('validation.available_for_reservation');
    }
}
