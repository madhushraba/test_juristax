<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class RouteController extends Controller
{
   
    // public function view1(): View
    // {
    //     return view('pages.Page1');
    // }
    public function index()
{
    return view('pages.Page1');
}
public function page2()
{
    return view('pages.Page2');
}

public function page3()
{
    return view('pages.page3');
}

public function users()
{
    return view('pages.Users');
}
public function home()
{
    return view('pages.Home');
}

   
    
}
