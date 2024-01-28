<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.category.index', [
            'categories' => Category::all(),
            'active' => 'Category Module'
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
            'categories' => Category::all(),
            'active' => 'Add Category'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:category,name',
        ]);

        Category::create($validatedData);

        return redirect('/admin/dashboard/categories')->with('success', 'New Category has been added!');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Category $category)
    {
        return view('admin.category.edit', [
            'category' => $category,
            'active' => 'Edit Category'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Category $category)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:categories,name',

        ]);

        Category::where('id', $category->id)
            ->update($validatedData);
        return redirect('/admin/dashboard/categories')->with('success', 'Category has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy(Category $category)
    {
        Category::destroy($category->id);

        return redirect('/admin/dashboard/categories')->with('success', 'Category has been deleted!');
    }

    public function unpublish($id)
    {
        $data = Category::find($id);

        $data->active = 0;
        $data->save();
        return redirect('/admin/dashboard/category');
    }
    public function publish($id)
    {
        $data = Category::find($id);

        $data->active = 1;
        $data->save();
        return redirect('/admin/dashboard/categories');
    }
}
