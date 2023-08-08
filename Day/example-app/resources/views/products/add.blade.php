@extends('layouts.app')


@section('content')
    <!-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif -->

    <div class="container">
        <h1> Add new Product</h1>
        <form class="container" action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Product Name</label>
                <input type="text" name="name" value = "{{old('name')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Name">
            </div>
            @error('name')
                <span style="color: red; font-weight: bold;">
                    {{ $message }}
                </span>
            @enderror
            <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
                <input type="text" name="description" value = "{{old('description')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Description">
            </div>
            @error('description')
                <span style="color: red; font-weight: bold;">
                    {{ $message }}
                </span>
            @enderror
            <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input type="number" name="price" value = "{{old('price')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Price">
            </div>
            @error('price')
                <span style="color: red; font-weight: bold;">
                    {{ $message }}
                </span>
            @enderror
            <div class="form-group">
                <label for="exampleInputPassword1">Image</label>
                <input type="file" name="image" value = "{{old('image')}}" class="form-control" id="exampleInputPassword1" placeholder="Image">
            </div>
            @error('image')
                <span style="color: red; font-weight: bold;">
                    {{ $message }}
                </span>
            @enderror

            <div class="form-group">
                <label for="exampleInputEmail1">Category</label>
                <select class="form-select" name='category_id' aria-label="Default select example">
                    <option selected disabled>Choose the wisest category</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach

                </select>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>



@endsection