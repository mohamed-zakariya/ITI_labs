@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- <p style="color: purple; font-size: large;text-align: center;">Welcome for the first laravel page</p> -->
        <!-- @dump($products) -->

        <style>
            table, th, td{
                border: 1px solid black;
                color: red;
            }
        </style>
        <a href="{{ route('products.add')}}" class="btn btn-info"> Add new product </a>
        <table class="table table-dark">
            <tr>
                <th> Id </th>
                <th> Name </th>
                <th> Description </th>
                <th> Images </th>
                <th> Price </th>
                <th> Created_at </th>
                <th> Updated_at </th>
                <th> category </th>
                <th> Show </th>
                <th> Edit </th>
                <th> Delete </th>

            </tr>

            @foreach($products as $Product)
                <tr>
                    <th> {{$Product->id}} </th>
                    <th> {{$Product->name}}  </th>
                    <th> {{$Product->description}}  </th>
                    <th> <img src="{{ asset('images/'.$Product->images) }}" alt="" style="width:50px;"> </th>
                    <th> {{$Product->price}}  </th>
                    <th> {{$Product->created_at}}  </th>
                    <th> {{$Product->updated_at}}  </th>
                    <th> <a  class="btn btn-info" href="{{ $Product->category? route('categories.show', $Product->category->id) : null }}"> {{$Product->category? $Product->category->name : 'No Category'}} </a> </th>
                    <th> <a href="{{ route('products.show', $Product->id) }}"  class="btn btn-primary"> Show </a> </th>
                    <th> <a href="{{ route('products.edit', $Product->id) }}"  class="btn btn-warning"> Edit </a> </th>
                    <th>  <a href="{{ route('products.delete', $Product->id) }}"  class="btn btn-danger"> Delete </a> </th>

                </tr>
            @endforeach    
        </table>

    </div>
@endsection    
