<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
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
                'slug' => $request->category_name,
            ]);
            return redirect()-> back()->with('success','Category Created Successfully.');
        } catch (\Exception $e) {
            // \Log::error('Category Created: '.$e->getMessage());
            return redirect()-> back()->with('error','Something went wrong! Please try again');
        }
        
    }
}
