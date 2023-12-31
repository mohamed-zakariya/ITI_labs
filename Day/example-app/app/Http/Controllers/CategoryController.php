<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\StoreCategoryRequest;
use Illuminate\Support\Facades\Auth;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function __construct(){
        $this->middleware('auth')->only('store', 'destroy', 'update');
    }

    public function index()
    {
        //
        $categories = Category::all();
        return view('categories.main', ['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $products = Product::all();
        return view('categories.add', ['products'=>$products]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=>'required'
        ]);
        $data = $request->all();
        $data['user_id'] =  Auth::user()->id;
        Category::create($data);

        return to_route('categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
        return view('categories.show', $data =["category"=>$category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
        if(Auth::id() == $category->user_id){
            return view ('categories.edit',['category'=>$category] );
        }
        return abort(401);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        
        $request->validate([
            "name"=>'required|unique:categories'
        ]);
        
        $name = $request->name;
        $category->name = $name;
        $category->save();

        return to_route('categories.show', ['category'=>$category]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
        if(Auth::id() == $category->user_id){
            $category->delete();       
            return to_route("categories.index");
        }
        return abort(401);
    }
}
