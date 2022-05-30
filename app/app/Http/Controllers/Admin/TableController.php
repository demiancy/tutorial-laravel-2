<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Table;
use App\Http\Requests\TableStoreRequest;
use App\Http\Requests\TableUpdateRequest;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.table.index', [
            'tables' => Table::paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.table.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  TableStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TableStoreRequest $request)
    {
        Table::create([
            'name'         => $request->name,
            'guest_number' => $request->guest_number,
            'status'       => $request->status,
            'location'     => $request->location,
        ]);

        return to_route('admin.tables.index')
            ->with('success', __('admin.table.create.success'));
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
     * @param  Table  $table
     * @return \Illuminate\Http\Response
     */
    public function edit(Table $table)
    {
        return view('admin.table.edit', [
            'table' => $table,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  TableUpdateRequest  $request
     * @param  Table  $table
     * @return \Illuminate\Http\Response
     */
    public function update(TableUpdateRequest $request, Table $table)
    {
        $table->update($request->validated());

        return to_route('admin.tables.index')
            ->with('success', __('admin.table.edit.success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Table  $table
     * @return \Illuminate\Http\Response
     */
    public function destroy(Table $table)
    {
        if (!$table->delete()) {
            return to_route('admin.tables.index')
                ->with('danger', __('admin.table.delete.danger'));
        }

        return to_route('admin.tables.index')
            ->with('success', __('admin.table.delete.success'));
    }
}
