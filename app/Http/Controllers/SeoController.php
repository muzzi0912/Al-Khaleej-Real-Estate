<?php

namespace App\Http\Controllers;

use App\Models\Seo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SeoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seoRecords = Seo::all();
        return view('admin.seo.allseo')->with('seoRecords', $seoRecords);
    }




    function addNewSeo(){
        return view('admin.seo.addnewseo');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'author' => 'required|string|max:255',
            'description' => 'required|string',
            'keyword' => 'required|string',
            'robot' => 'nullable|boolean',
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:seos,slug',
        ]);

        $data = $request->all();
        $data['slug'] = $request->slug; // Generate slug from title
        $data['robot'] = $request->has('robot');; // Generate slug from title

        $seo = Seo::create($data);

        return redirect()->route('admin_allseo');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $seo = Seo::findOrFail($id);
        return response()->json($seo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $seo = Seo::findOrFail($id);

        $request->validate([
            'author' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'keyword' => 'sometimes|required|string',
            'robot' => 'sometimes|required|boolean',
            'title' => 'sometimes|required|string|max:255',
        ]);

        $data = $request->all();
        if ($request->has('title')) {
            $data['slug'] = Str::slug($request->title);
        }

        $seo->update($data);

        return response()->json([
            'message' => 'SEO record updated successfully',
            'seo' => $seo,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $seo = Seo::findOrFail($request->id);
        $seo->delete();

        return redirect()->route('admin_allseo');
    }
}
