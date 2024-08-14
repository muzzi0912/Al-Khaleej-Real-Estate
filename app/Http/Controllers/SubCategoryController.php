<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Models\Category;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subCategories = SubCategory::with('Category')->get();
        return view('admin.subcategory.subcategory')->with('subCategories', $subCategories);
    }


    function subcategorynew() {
        $categories = Category::all();
        return view('admin.subcategory.newsubcategory')->with('categories', $categories);
    }

    function editSubCategory(Request $request) {
        $subCategory = SubCategory::findOrFail($request->id);
        $categories = Category::all();
        return view('admin.subcategory.editsubcategory')->with('subCategory', $subCategory)->with('categories', $categories);

    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);

        $subCategory = SubCategory::create($request->all());

        return redirect()->route('admin_sub_category');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $subCategory = SubCategory::findOrFail($id);
        return response()->json($subCategory);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $subCategory = SubCategory::findOrFail($request->id);

        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);

        $subCategory->update($request->all());

        return redirect()->route('admin_sub_category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subCategory = SubCategory::findOrFail($id);
        $subCategory->delete();

        return redirect()->route('admin_sub_category');
    }
}
