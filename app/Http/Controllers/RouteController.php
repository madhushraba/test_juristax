<?php

namespace App\Http\Controllers;
use App\Models\Category;


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


    public function testimonial()
    {
        return view('pages.Testimonial');
    }


    // public function catlist()
    // { 
    //     $categories = Category::all(); // Assuming 'Category' is your model
    //     return view('pages.Catlist', compact('categories'));

    //     // return view('pages.Catlist');
    // }
    public function createCategory()
    {
        return view('pages.Addcat');
    }
    
    public function storeCategory(Request $request)
    {
        $validatedData = $request->validate([
            'data' => 'required|string',
        ]);
    
        Category::create([
            'name' => $validatedData['data'],
        ]); 
        return redirect()->route('showAddCat');
    }
// public function storeCategory(Request $request)
//     { 
//         $category = Category::create([
//             'name' => $validatedData['data'],
//         ]);
//         session(['input_data' => $validatedData['data']]);

//         return redirect()->route('showAddCat');
//     } 

    
    public function showCategory()
    {
        $data = session('input_data');
        return view('pages.Catlist', compact('data'));
    }
    



}












// public function addcat(Request $request)
// {
//     $data = $request->input('data');
//     session(['input_data' => $data]);

// return redirect()->route('pages.Addcat');

//     return redirect('/addcat');
// }