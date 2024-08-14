<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BrandsLogo;

class AboutUsController extends Controller
{

    function aboutus()  {
        $brandLogo = BrandsLogo::all();
        return view('website.aboutus')->with('brandLogo', $brandLogo);
    }


}
