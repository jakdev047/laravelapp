<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:products|max:255',
            'category_id' => 'required'
        ]);
        try {
            // slug
            $slug = Str::slug($request->name); // Demo => demo

            // for image
            $imageName =  $slug.'.'.$request->file('image')->getClientOriginalExtension(); // demo.jpg
            $imageNameWithPath =  'products/'.$imageName;  // products/demo.jpg for uploads storage folder
            $request->file('image')->storeAs('public/',$imageNameWithPath); // img store in storage folder
            $imageNameWithDBPath =  'storage/'.$imageNameWithPath;  // products/demo.jpg for uploads storage folder
        

            Product::create([
                'name' => $request->name,
                'category_id' => $request->category_id,
                'slug' => $slug,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'image' => $imageNameWithDBPath,
                'description' => $request->description,
            ]);
            return redirect('/admin/products')->with('success','Product Created Successfully.');
        } catch (\Exception $e) {
            return redirect()-> back()->with('error','Something went wrong! Please try again');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit',compact('categories','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|max:255',
            'category_id' => 'required'
        ]);
        try {
            // update
            $product->name = $request->name;
            $product->category_id = $request->category_id;
            $product->slug = Str::slug($request->name);
            $product->price = $request->price;
            $product->quantity = $request->quantity;
            $product->description = $request->description;
            $product->update();
            
            return redirect('/admin/products')->with('success','Product Updated Successfully.');

        } catch (\Exception $e) {
            return redirect()-> back()->with('error','Something went wrong! Please try again');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        try {

            // delete value
            $product->delete();
            
            return redirect()-> back()->with('success','Product Deleted Successfully.');
        } catch (\Exception $e) {
            // \Log::error('Category Created: '.$e->getMessage());
            return redirect()-> back()->with('error','Something went wrong! Please try again');
        }
    }
}
