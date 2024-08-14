<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leads;


class LeadsController extends Controller
{
    function index() {
        $leads = Leads::orderBy('id', 'desc')->get();
        return view('admin.leads')->with('leads', $leads);
    }
}
