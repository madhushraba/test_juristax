<?php

namespace App\Http\Controllers;
 
use App\Models\Category; 

use Illuminate\Http\Request;

// class CategoryController  extends Controller
// {
 
//     public function index()
//     {
//         $enquiries = Category::all();

//         return view('pages.UserEnquiry', ['enquiries' => $enquiries]);
//     }
//     public function store(Request $request)
//     { 
//         $validatedData = $request->validate([
//             'name' => 'required|varchar', 
//         ]);
 
//         Category::create($validatedData); 
//         return redirect()->back()->with('success', 'Category added successfully');
//     }
//     public function showenquiry()
// {
//     $enquiries = Category::all();

//     return view('pages.Catlist', ['enquiries' => $enquiries]);
// }

// }  

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('pages.Addcat', ['categories' => $categories]);
    }

    public function create()
    {
        return view('pages.Addcat');
    }

    public function store(Request $request)
    { 
        $validatedData = $request->validate([
            'name' => 'required|string', 
        ]); 
        Category::create($validatedData); 
        return redirect()->back()->with('success', 'Category added successfully');
    }




    public function show()
    {
        $category = Category::all();
    
        return view('pages.Catlist', ['category' => $category]);
    }

    // public function edit(Category $category)
    // {
    //     return view('categories.edit', ['category' => $category]);
    // }

    // public function update(Request $request, Category $category)
    // { 
    //     $validatedData = $request->validate([
    //         'name' => 'required|string', 
    //     ]); 
    //     $category->update($validatedData); 
    //     return redirect()->back()->with('success', 'Category updated successfully');
    // }

    // public function destroy(Category $category)
    // { 
    //     $category->delete(); 
    //     return redirect()->back()->with('success', 'Category deleted successfully');
    // }
}








