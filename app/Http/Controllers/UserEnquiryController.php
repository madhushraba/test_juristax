<?php

namespace App\Http\Controllers;

use App\Models\UserEnquiry;
use Illuminate\Http\Request;

class UserEnquiryController extends Controller
{

    public function index()
    {
        $enquiries = UserEnquiry::all();

        return view('pages.UserEnquiry', ['enquiries' => $enquiries]);
    }
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'number' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Create a new UserEnquiry instance and save it to the database
        UserEnquiry::create($validatedData); 

        // Redirect back to the form with a success message
        return redirect()->back()->with('success', 'Enquiry submitted successfully');
    }
    public function showenquiry()
{
    $enquiries = UserEnquiry::all();

    return view('pages.ShowEnquiry', ['enquiries' => $enquiries]);
}

}