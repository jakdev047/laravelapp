<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

    // update category
    public function update(Request $request,$id) {
        // all request data get => dd($request->all())
        $request->validate([
            'category_name' => 'required|unique:categories|max:255'
        ]);
        try {
            // get single category
            $category = Category::find($id);

            // update value
            $category->category_name = $request->category_name;
            // $category->slug = str_replace(" ","-",$request->category_name);
            $category->slug =Str::slug($request->category_name);
            $category->update();
            
            return redirect()-> back()->with('success','Category Updated Successfully.');
        } catch (\Exception $e) {
            // \Log::error('Category Created: '.$e->getMessage());
            return redirect()-> back()->with('error','Something went wrong! Please try again');
        }
        
    }

    // delete category
    public function destroy($id) {
        try {
            // get single category
            $category = Category::find($id);

            // delete value
            $category->delete();

            // another way delete => Category::destroy($id);
            
            return redirect()-> back()->with('success','Category Deleted Successfully.');
        } catch (\Exception $e) {
            // \Log::error('Category Created: '.$e->getMessage());
            return redirect()-> back()->with('error','Something went wrong! Please try again');
        }
    }

}
