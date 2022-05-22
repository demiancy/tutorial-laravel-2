<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Table;
use App\Http\Requests\ReservationStoreRequest;
use App\Http\Requests\ReservationUpdateRequest;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.reservation.index', [
            'reservations' => Reservation::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.reservation.create', [
            'tables' => Table::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ReservationStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservationStoreRequest $request)
    {
        Reservation::create($request->validated());

        return to_route('admin.reservations.index')
            ->with('success', 'Reservation created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        return view('admin.reservation.edit', [
            'reservation' => $reservation,
            'tables'      => Table::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ReservationUpdateRequest  $request
     * @param  Reservation  $$reservation
     * @return \Illuminate\Http\Response
     */
    public function update(ReservationUpdateRequest $request, Reservation $reservation)
    {
        $reservation->update($request->validated());

        return to_route('admin.reservations.index')
            ->with('success', 'Reservation updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
