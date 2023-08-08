@extends('product')

@section('Content')
    <table class="container">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product['name']}}</td>
                    <td>{{$product['Description']}}</td>
                    <td>{{$product['price']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection