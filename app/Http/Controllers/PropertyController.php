<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\Agent;
use App\Models\SubCategory;


class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = Property::with('agent')->with('Category')->with('SubCategory')->get();
        return view('admin.properties.properties')->with('properties',$properties);
    }

    public function addNewProperty()
    {
        $categories = Category::all();
        $agents = Agent::all();
        $subcategories = SubCategory::all();
        return view('admin.properties.propertiesnew')->with('categories', $categories)->with('agents', $agents)->with('subcategories', $subcategories);
    }


    function propertiesEdit(Request $request) {
        $property = Property::findOrFail($request->id);
        $categories = Category::all();
        $agents = Agent::all();
        $subcategories = SubCategory::all();
        return view('admin.properties.editproperty')->with('property', $property)->with('categories', $categories)->with('agents', $agents)->with('subcategories', $subcategories);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'agent_id' => 'required|exists:agents,id',
            'category_id' => 'required|exists:categories,id',
            'sub_category_id' => 'required|exists:sub_categories,id',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'short_description' => 'required|string',
            'long_description' => 'required|string',
            'total_beds' => 'required|integer',
            'total_washrooms' => 'required|integer',
            'sq_ft' => 'required|numeric',
            'aminities' => 'nullable|string', // Ensure aminities is validated
            'location_map_url' => 'nullable|url',
            'video_url' => 'nullable|url',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->except('images');
        if ($request->has('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $path = $image->store('property_images', 'public');
                $imagePaths[] = $path;
            }
            $data['images'] = $imagePaths;
        }

        $property = Property::create($data);
        return redirect()->route('admin_properties');
    }

    /**
     * Display the specified resource by name.
     */
    public function show(string $name)
    {
        $property = Property::where('name', $name)->firstOrFail();
        return response()->json($property);
    }

    /**
     * Update the specified resourcae in storage.
     */
     /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $property = Property::findOrFail($request->id);

        $request->validate([
            'agent_id' => 'required|exists:agents,id',
            'category_id' => 'required|exists:categories,id',
            'sub_category_id' => 'required|exists:sub_categories,id',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'short_description' => 'required|string',
            'long_description' => 'required|string',
            'total_beds' => 'required|integer',
            'total_washrooms' => 'required|integer',
            'sq_ft' => 'required|numeric',
            'aminities' => 'nullable|string', // Ensure aminities is validated
            'location_map_url' => 'nullable|url',
            'video_url' => 'nullable|url',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $data = $request->except('images');

        if ($request->has('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $path = $image->store('property_images', 'public');
                $imagePaths[] = $path;
            }
            $data['images'] = $imagePaths;
        }

        $property->update($data);

        return redirect()->route('admin_properties');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $property = Property::findOrFail($request->id);

        // Delete associated images
        if ($property->images) {
            foreach ($property->images as $image) {
                Storage::disk('public')->delete($image);
            }
        }

        $property->delete();
        return redirect()->route('admin_properties');
    }

    /**
     * Fetch random 8 properties.
     */
    public function propertiesByCategoryrandomly($categoryId)
    {
        $Category = Category::where('category_id', $categoryId)->inRandomOrder()->take(8)->get();
        return response()->json($properties);
    }




    /**
     * Fetch properties by Category.
     */
    public function propertiesByCategory($categoryId)
    {
        $properties = Property::where('category_id', $categoryId)->get();
        return response()->json($properties);
    }



    function properties()  {
        $type=null;
        $Category=null;
        $SubCategory=null;
        return view('website.properties')->with('type', $type)->with('categoryActive', $Category)->with('subCategory', $SubCategory);
    }

    function propertiestypes(Request $request)  {
        $Category = Category::where('name', $request->type)->first();
        $SubCategory = SubCategory::where('name', $request->subtype)->first();
        return view('website.properties')->with('type', $request->type)->with('categoryActive', $Category)->with('subCategory', $SubCategory);
    }

    function propertiesDetails() {
        return view('website.propertyDetails');
    }




}
