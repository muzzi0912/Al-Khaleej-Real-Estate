<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;
use App\Models\BrandsLogo;
use Illuminate\Support\Facades\Validator;
use App\Models\Contact;
use App\Models\Project;

class HomeController extends Controller
{
    function index()  {
        $agents = Agent::inRandomOrder()->take(8)->get();
        $brandLogo = BrandsLogo::all();
        $projects = Project::inRandomOrder()->take(8)->get();
        return view('website.home')->with('agents', $agents)->with('brandLogo', $brandLogo)->with('projects', $projects);
    }

    function submitContactForm(Request $request) {
        $validator = \Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'category' => 'required|string',
            'message' => 'required|string',
            'g-recaptcha-response' => 'required|recaptcha',
        ], [
            'g-recaptcha-response.required' => 'Please complete the captcha to proceed.',
            'g-recaptcha-response.recaptcha' => 'Captcha verification failed, please try again.',
        ]);
        if ($validator->fails()) {
            return redirect()->route('home')
                             ->withErrors($validator)
                             ->withInput()
                             ->withFragment('contactSubmitForm');
        }
        Contact::create($request->all());


        return redirect()->route('home')
        ->withFragment('contactSubmitForm')
        ->with('success', 'Your message has been successfully sent!');

    }
}
