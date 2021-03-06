<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Symfony\Component\HTTPFoundation\Response;

class ProductApiController extends Controller
{
    public function productList(){
        $products = Product::all();
        $reponse = [
            'success' => true,
            'message' => 'Data Found',
            'data' => $products
        ];
        return response()->json($reponse,Response::HTTP_OK);
    }
    
    public function getProductBySlug($slug){
        $product = Product::where('slug',$slug)->first();
        $reponse = [
            'success' => true,
            'message' => 'Single Product Found',
            'data' => $product
        ];
        return response()->json($reponse,Response::HTTP_OK);
    }
}
