@extends('layouts.app')


@section('content')

    <div class="container">
        <h1> Edit Product</h1>

        <form class="container" action="{{route('products.update',  $product->id ) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleInputEmail1">Product Name</label>
                <input type="text" value="{{$product->name}}" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Name">
            </div>
            @error('name')
                <span style="color: red; font-weight: bold;">
                    {{ $message }}
                </span>
            @enderror
            
            <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
                <input type="text" name="description" value="{{$product->description}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Description">
            </div>
            @error('description')
                <span style="color: red; font-weight: bold;">
                    {{ $message }}
                </span>
            @enderror

            <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input type="number" name="price" value="{{$product->price}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Price">
            </div>
            @error('price')
                <span style="color: red; font-weight: bold;">
                    {{ $message }}
                </span>
            @enderror

            <div class="mb-3">
                @if($product->images)
                    <img  width="100" height="100" src="{{asset('images/'.$product->images)}}">
                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Image</label>
                <input type="file" name="image"  class="form-control" id="exampleInputPassword1" placeholder="Image">
            </div>
            @error('image')
                <span style="color: red; font-weight: bold;">
                    {{ $message }}
                </span>
            @enderror

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>



@endsection