<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ListYourProperty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ListYourPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $properties = ListYourProperty::orderBy('created_at', 'desc')->get();

        return view('admin.listyourproperty', compact('properties'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'listing_type' => 'required|string',
            'user_type' => 'required|string',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:15',
            'property_type' => 'required|string',
            'max_price' => 'required|numeric|min:0',
            'minimum_size' => 'required|integer|min:0',
            'number_of_beds' => 'required|integer|min:0',
            'number_of_baths' => 'required|integer|min:0',
            'message' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $property = ListYourProperty::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Your property listing request successfully send!',
            'data' => $property,
        ], 201);
    }

}
