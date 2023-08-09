@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$category->name}}</h5>
            <br>
            <h5 class="card-title"> Added by {{$category->user? $category->user->name : ''}}</h5>
            <br>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

    <h1> All the products related<h1>
    @foreach($category->product as $product)
        <li> <a href="{{ route('products.show',  $product->id) }}"> {{$product->name}} </a> </li>
    @endforeach
    </div>
@endsection    
