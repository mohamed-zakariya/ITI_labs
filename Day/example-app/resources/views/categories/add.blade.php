@extends('category')


@section('Content')
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
        <h1> Add new Category</h1>
        <form class="container" action="{{route('categories.store', )}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Category Name</label>
                <input type="text" name="name" value = "{{old('name')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category Name">
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