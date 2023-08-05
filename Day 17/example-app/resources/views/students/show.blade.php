@extends('student')

@section('Content')
    @dump($product)
    <div>
        <!-- <p style="color: purple; font-size: large;text-align: center;">Welcome for the first laravel page</p> -->
        <ul>
            <li> {{$product->id}} </li>
            <li> {{$product->name}} </li>
            <li> {{$product->descriptoon}} </li>
            <li> {{$product->price}} </li>
        </ul>
        

    </div>
@endsection    
