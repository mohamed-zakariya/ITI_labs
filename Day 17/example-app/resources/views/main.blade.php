@extends('summertranning')


@section('Content')
    <div>
        <!-- <p style="color: purple; font-size: large;text-align: center;">Welcome for the first laravel page</p> -->
        @dump($products)

        <style>
            table, th, td{
                border: 1px solid black;
                color: red;
            }
        </style>
        <table>
            <tr>
                <th> Id </th>
                <th> Name </th>
                <th> Description </th>
                <th> images </th>
                <th> price </th>
                <th> show </th>
                <th> delete </th>

            </tr>

            @foreach($products as $Product)
                <tr>
                    <th> {{$Product->id}} </th>
                    <th> {{$Product->name}}  </th>
                    <th> {{$Product->descriptoon}}  </th>
                    <th> {{$Product->images}}  </th>
                    <th> {{$Product->price}}  </th>
                    <th> <a href="{{ route('products.show', $Product->id) }}"> show </a> </th>
                    <th>  <a href="{{ route('products.delete', $Product->id) }}" > delete </a> </th>

                </tr>
            @endforeach    
        </table>

    </div>
@endsection    
