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
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Reservation::class, 'reservation');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::sortable(['date' => 'desc'])
            ->paginate(10)
            ->appends($this->permittedRequestParams(['page']));

        return view('admin.reservation.index', [
            'reservations' => $reservations,
            'params'       => $this->permittedRequestParams(),
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
            'tables' => Table::all(),
            'params' => $this->permittedRequestParams()
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

        return to_route('admin.reservations.index', $this->permittedRequestParams())
            ->with('success', __('admin.reservation.create.success'));
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
            'tables'      => Table::all(),
            'params'      => $this->permittedRequestParams()
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

        return to_route('admin.reservations.index', $this->permittedRequestParams())
            ->with('success', __('admin.reservation.edit.success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        $route = to_route('admin.reservations.index', $this->permittedRequestParams());

        if (!$reservation->delete()) {
            return $route->with('danger', __('admin.reservation.delete.danger'));
        }

        return $route->with('success', __('admin.reservation.delete.success'));
    }
}
