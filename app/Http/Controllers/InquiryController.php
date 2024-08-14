<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $inquiries = Inquiry::all();
        return view('admin.inquires')->with('inquiries', $inquiries);
    }

    function listyourproperty()  {
        return view('website.listyourproperty');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'inquiry_type' => 'required|string|max:255',
            'information' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone_number' => 'required|string|max:255',
            'property_type' => 'required|max:255',
            'message' => 'required',
            'g-recaptcha-response' => 'required|recaptcha',
        ], [
            'g-recaptcha-response.required' => 'Please complete the captcha to proceed.',
            'g-recaptcha-response.recaptcha' => 'Captcha verification failed, please try again.',
        ]);


        if ($validator->fails()) {
            return redirect()->route('inquiry')
                             ->withErrors($validator)
                             ->withInput()
                             ->withFragment('contactSubmitForm');
        }


        $inquiry = Inquiry::create($request->all());

        return redirect()->back()
        ->withFragment('contactSubmitForm')
        ->with('success', 'Your message has been successfully sent!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $inquiry = Inquiry::findOrFail($id);
        $inquiry->delete();

        return response()->json(['message' => 'Inquiry deleted successfully']);
    }

    function inquiry()  {
        return view('website.inquiry');
    }


}
