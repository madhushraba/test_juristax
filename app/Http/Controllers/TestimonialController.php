<?php

namespace App\Http\Controllers;

use App\Models\Testimonial; 

use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    //
    public function index()
    {
        $testimonials = Testimonial::all();
        // dd('fgdhdfxgbdf');

        return view('pages.Testimonial', ['testimonial' => $testimonials]);
    }


    public function store(Request $request)
    { 
        // dd($request);
        $validatedData = $request->validate([
            'name' => 'required|string', 
            'review' => 'required|string',
            'number'=>'numeric',
            // 'img'=>'string',
        ]);

        // Create a new UserEnquiry instance and save it to the database
        Testimonial::create($validatedData); 

        // Redirect back to the form with a success message
        return redirect()->back()->with('success', 'Testimonial submitted successfully');
   
    }
  public function show()
    {
        $testimonials = Testimonial::all();
    
        return view('pages.TestimonialList', 
        ['testimonials' => $testimonials]
    );
    }
}
