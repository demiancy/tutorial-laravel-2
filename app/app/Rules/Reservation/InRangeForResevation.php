<?php

namespace App\Rules\Reservation;

use Illuminate\Contracts\Validation\Rule;
use Carbon\Carbon;

class InRangeForResevation implements Rule
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
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //Reservations can only be created on future dates up to one week, within the hours in which the restaurant works.
        $date     = Carbon::parse($value);
        $lastDate = Carbon::now()->addWeek();
        $time     = Carbon::createFromTime($date->hour, $date->minute, $date->second);

        // when the restaurant is open
        $earliestTime = Carbon::createFromTimeString('17:00:00');
        $lastTime     = Carbon::createFromTimeString('23:00:00');

        return ($date > Carbon::now() && $date <= $lastDate)
            && $time->between($earliestTime, $lastTime);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('validation.in_range_for_reservation');
    }
}
