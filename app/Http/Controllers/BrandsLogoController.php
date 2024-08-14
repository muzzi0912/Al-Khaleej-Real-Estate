<?php

namespace App\Http\Controllers;

use App\Models\BrandsLogo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandsLogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logos = BrandsLogo::all();
        return view('admin.brands.brandlogo')->with('logos', $logos);
    }


    function createNewBrand(){
        return view('admin.brands.brandlogosnew');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = $request->file('image')->store('brands_logos', 'public');

        $logo = BrandsLogo::create([
            'image' => $imagePath,
        ]);

        return redirect()->route('admin_brandlogos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $logo = BrandsLogo::findOrFail($request->id);

        // Delete logo image from storage
        Storage::disk('public')->delete($logo->image);

        $logo->delete();

        return redirect()->route('admin_brandlogos');
    }
}
