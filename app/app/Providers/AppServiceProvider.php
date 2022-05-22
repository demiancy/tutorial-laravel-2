<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Rules\Reservation\SpaceForGuests;
use App\Rules\Reservation\InRangeForResevation;
use App\Rules\Reservation\AvailableForReservation;
use  Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('space_for_guests', function ($attribute, $value, $parameters, $validator) {
            return (new SpaceForGuests())
                ->setData($validator->getData())
                ->passes($attribute, $value);
        });

        Validator::extend('available_for_reservation', function ($attribute, $value, $parameters, $validator) {
            $id = $parameters[0] ?? null;
            return (new AvailableForReservation())
                ->setData($validator->getData())
                ->passes($attribute, $value, $id);
        });

        Validator::extend('in_range_for_reservation', function ($attribute, $value, $parameters, $validator) {
            return (new InRangeForResevation())->passes($attribute, $value);
        });
    }
}
