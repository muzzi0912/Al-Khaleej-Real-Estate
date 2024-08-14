<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contacts')->with('contacts', $contacts);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
            return redirect()->route('contactus')
                             ->withErrors($validator)
                             ->withInput()
                             ->withFragment('contactSubmitForm');
        }
        Contact::create($request->all());


        return redirect()->route('contactus')
        ->withFragment('contactSubmitForm')
        ->with('success', 'Your message has been successfully sent!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return response()->json(['message' => 'Contact message deleted successfully']);
    }

    function contactus()  {
        return view('website.contactus');
    }
}
