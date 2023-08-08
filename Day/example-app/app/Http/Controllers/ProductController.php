<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\Rule;

use App\Models\Product;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Category;


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
        return view('products.show', $data=["product"=>$product]);
    }
    function delete($id){
        $product = Product::findOrFail($id);
        // DB::table("products")
        //         ->where('id',$id)
        //         ->get();
                // dd($product);
        if($product->images){
            $this->delete_old_image($product->images);
        }       
         $product->delete();       
        return to_route("products.list");
    }
    // show the old data in the page of the edit
    function edit($id){
        $product = Product::findOrfail($id);

        return view('products.edit', $data = ['product' => $product]);
    }
    // update the data entered in the inputs by an specific id
    function update($id){
        
        $product = Product::findOrfail($id);


        $name = request('name');
        $description = request('description');
        $price = request('price');
        $image = request('image');

        $product->name = $name;
        $product->description = $description;
        $product->price = $price;

        $product->save();
        $old_image = $product->images;


        $this->save_image($image, $product);
        if($image){
            $this->delete_old_image($old_image);
        }

        return to_route('products.show', $product->id);

    }

    function contact(){
        return view('contact');
    }

    function about(){
        return view('about');
    }

    function associate(){
        $products = [
            ['name' => 'chips', 'Description' => 'eating chips for entertainment','price' => 5],
            ['name' => 'indomie', 'Description' => 'eating indomie for entertainment', 'price' => 6]
        ];

        return view('products.associate', $data=["products"=>$products]);
    }

    function add(){
        $categories = Category::all();
        return view('products.add', ['categories'=>$categories]);
    }

    function store(){
        // $data = request();
        request()->validate([
            "name" => 'required|min:4',
            "description" => 'required',
            "image" => 'required',
            "price" => 'required'
        ]);

        $name = request('name');
        $description = request('description');
        $price = request('price');
        $image = request('image');
        $id = request('category_id');

        // $product = new Product();
        // $product->name = $name;
        // $product->description = $description;
        // $product->images = $image;
        // $product->price = $price;

        $product = Product::create(['name'=>$name, 'description'=>$description, 'images'=>$image, 'price'=>$price, 'category_id'=>$id]);
        
        $this->save_image($image, $product);
        
        // $product->save();

        return to_route('products.list');
    }

    private function save_image($image, $product){
        if($image){
            $image_name = time().'.'.$image->extension();
            $image->move(public_path('images/'), $image_name);
            $product->images = $image_name;
            $product->save();
        }
    }

    private  function  delete_old_image($image_name){
        try{
            unlink('images/'.$image_name);
        }catch (\Exception $e){
            echo $e;
        }
    } 
    
}
