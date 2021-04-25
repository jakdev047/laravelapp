<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // all category
    public function index() {
        $categories = Category::all();
        return view('admin.categories.index',['categories'=>$categories]);
    }

    // create page show
    public function create() {
        return view('admin.categories.create');
    }

    // add category
    public function store(Request $request) {
        $request->validate([
            'category_name' => 'required|unique:categories|max:255'
        ]);
        try {
            Category::create([
                'category_name' => $request->category_name,
                'slug' => str_replace(" ","-",$request->category_name),
            ]);
            return redirect()-> back()->with('success','Category Created Successfully.');
        } catch (\Exception $e) {
            // \Log::error('Category Created: '.$e->getMessage());
            return redirect()-> back()->with('error','Something went wrong! Please try again');
        }
        
    }

    // edit page show
    public function edit($id) {
        $category = Category::find($id);
        return view('admin.categories.edit',['category'=>$category]);
    }
}
