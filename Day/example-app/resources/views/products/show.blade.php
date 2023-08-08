@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- <p style="color: purple; font-size: large;text-align: center;">Welcome for the first laravel page</p> -->
        <!-- <ul>
            <li> {{$product->id}} </li>
            <li> {{$product->name}} </li>
            <li> {{$product->descriptoon}} </li>
            <li> <img src="{{ asset($product->images) }}" alt="" style="width:50px;"> </li>
            <li> {{$product->price}} </li>
        </ul> -->
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{ asset('images/'.$product->images) }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$product->name}}</h5>
            <p class="card-text">{{$product->description}}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

    </div>
@endsection    
