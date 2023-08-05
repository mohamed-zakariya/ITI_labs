<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    //
    function index(){
        // $products = DB::table('products')
        //     ->select()
        //     ->get();
        // dd($products);  
        $products = Product::all();
        // dd($products);
        return view('main', $data=["products"=>$products]);
    }
    function show($id){
        $product = Product::findOrFail($id);
        // DB::table("products")
        //         ->where('id',$id)
        //         ->get();
                // dd($product);
        return view('students.show', $data=["product"=>$product]);
    }
    function delete($id){
        $product = Product::findOrFail($id);
        // DB::table("products")
        //         ->where('id',$id)
        //         ->get();
                // dd($product);
         $product->delete();       
        return to_route("products.list");
    }
}
