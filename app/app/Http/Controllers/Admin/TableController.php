<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Table;
use App\Http\Requests\TableStoreRequest;
use App\Http\Requests\TableUpdateRequest;
use App\Enums\TableStatus;
use App\Models\TableLocation;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tables = Table::sortable('name')
            ->paginate(10)
            ->appends($this->permittedRequestParams(['page']));

        return view('admin.table.index', [
            'tables' => $tables,
            'params' => $this->permittedRequestParams(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.table.create', [
            'statuses'  => TableStatus::getInstances(),
            'locations' => TableLocation::all(),
            'params'    => $this->permittedRequestParams(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  TableStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TableStoreRequest $request)
    {
        Table::create($request->validated());

        return to_route('admin.tables.index', $this->permittedRequestParams())
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
            'table'     => $table,
            'statuses'  => TableStatus::getInstances(),
            'locations' => TableLocation::all(),
            'params'    => $this->permittedRequestParams(),
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

        return to_route('admin.tables.index', $this->permittedRequestParams())
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
        $route = to_route('admin.tables.index', $this->permittedRequestParams());

        if (!$table->delete()) {
            return $route->with('danger', __('admin.table.delete.danger'));
        }

        return $route->with('success', __('admin.table.delete.success'));
    }
}
