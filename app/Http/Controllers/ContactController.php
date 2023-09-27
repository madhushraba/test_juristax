<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // 
    public function contactform()
    {
        return view('pages.Contactform');
    }
    public function contacttable()
    {
        

        return view('pages.ContactTable',
        //  ['categories' => $categories]
        );
    }
    public function store()
    {
        //postreq data storage , yet to complete

        return view('pages.Addcat',
        //  ['categories' => $categories]
    );
    }

}
