@extends('category')


@section('Content')

    <div class="container">
        <h1> Edit Category</h1>

        <form class="container" action="{{route('categories.update',  $category->id ) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleInputEmail1">ategory Name</label>
                <input type="text" value="{{$category->name}}" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Name">
            </div>
            @error('name')
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