<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // create page show
    public function create() {
        return view('admin.categories.create');
    }

    // add category
    public function store(Request $request) {
        print_r($request->all());
        exit();
    }
}
