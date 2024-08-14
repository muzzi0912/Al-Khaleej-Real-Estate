<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{

    function agents()  {
        return view('website.agents');
    }

    function agentsDetails()  {
        return view('website.agentsDetails');
    }






    function privacypolicy()  {
        return view('website.privacypolicy');
    }
    function termandconditions()  {
        return view('website.termandconditions');
    }
}
