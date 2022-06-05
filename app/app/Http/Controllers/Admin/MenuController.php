<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;
use App\Http\Requests\MenuStoreRequest;
use App\Http\Requests\MenuUpdateRequest;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Menu::class, 'menu');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::sortable('name')
            ->paginate(10)
            ->appends($this->permittedRequestParams(['page']));

        return view('admin.menu.index', [
            'menus'  => $menus,
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
        return view('admin.menu.create', [
            'categories' => Category::all(),
            'params'     => $this->permittedRequestParams()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  MenuStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuStoreRequest $request)
    {
        $image = $request->file('image')->store('public/menus');

        $menu = Menu::create([
            'name'        => $request->name,
            'description' => $request->description,
            'image'       => $image,
            'price'       => $request->price
        ]);

        if ($request->has('categories')) {
            $menu->categories()->attach($request->categories);
        }

        return to_route('admin.menus.index', $this->permittedRequestParams())
            ->with('success', __('admin.menu.create.success'));
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
     * @param  Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        return view('admin.menu.edit', [
            'menu'       => $menu,
            'categories' => Category::all(),
            'params'     => $this->permittedRequestParams()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  MenuUpdateRequest  $request
     * @param  Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(MenuUpdateRequest $request, Menu $menu)
    {
        $image = $menu->image;

        if ($request->hasFile('image')) {
            Storage::delete($menu->image);
            $image = $request->file('image')->store('public/menus');
        }

        $menu->update([
            'name'        => $request->name,
            'description' => $request->description,
            'image'       => $image,
            'price'       => $request->price
        ]);

        if ($request->has('categories')) {
            $menu->categories()->sync($request->categories);
        }

        return to_route('admin.menus.index', $this->permittedRequestParams())
            ->with('success', __('admin.menu.edit.success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        $menu->categories()->detach();
        $route = to_route('admin.menus.index', $this->permittedRequestParams());

        if (!$menu->delete()) {
            return $route->with('danger', __('admin.menu.delete.danger'));
        }

        Storage::delete($menu->image);

        return $route->with('success', __('admin.menu.delete.success'));
    }
}
