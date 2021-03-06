<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Category::class, 'category');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::sortable('name')
            ->paginate(10)
            ->appends($this->permittedRequestParams(['page']));

        return view('admin.category.index', [
            'categories' => $categories,
            'params'     => $this->permittedRequestParams(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create', [
            'params' => $this->permittedRequestParams()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CategoryStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryStoreRequest $request)
    {
        $image = $request->file('image')->store('public/categories');

        Category::create([
            'name'        => $request->name,
            'description' => $request->description,
            'image'       => $image
        ]);

        return to_route('admin.categories.index', $this->permittedRequestParams())
            ->with('success', __('admin.category.create.success'));
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
     * @param  Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', [
            'category' => $category,
            'params'   => $this->permittedRequestParams()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CategoryUpdateRequest  $request
     * @param  Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request, Category $category)
    {
        $image = $category->image;

        if ($request->hasFile('image')) {
            Storage::delete($category->image);
            $image = $request->file('image')->store('public/categories');
        }

        $category->update([
            'name'        => $request->name,
            'description' => $request->description,
            'image'       => $image
        ]);

        return to_route('admin.categories.index', $this->permittedRequestParams())
            ->with('success', __('admin.category.edit.success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->menus()->detach();
        $route = to_route('admin.categories.index', $this->permittedRequestParams());

        if (!$category->delete()) {
            return $route->with('danger', __('admin.category.delete.danger'));
        }

        Storage::delete($category->image);

        return $route->with('success', __('admin.category.delete.success'));
    }
}
