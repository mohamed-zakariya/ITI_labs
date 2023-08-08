@extends('layouts.app2')


@section('content')
    <div class="container">
        

        <style>
            table, th, td{
                border: 1px solid black;
                color: red;
            }
        </style>
        <a href="{{ route('categories.create')}}" class="btn btn-info"> Add new Category </a>
        <table class="table table-dark">
            <tr>
                <th> Id </th>
                <th> Name </th>
                <th> Added by </th>
                <th> Created_at </th>
                <th> Updated_at </th>
                <th> Show </th>
                <th> Edit </th>
                <th> Delete </th>

            </tr>

            @foreach($categories as $category)
                <tr>
                    <th> {{$category->id}} </th>
                    <th> {{$category->name}}  </th>
                    <th>{{$category->user? $category->user->name : ''}}</th>
                    <th> {{$category->created_at}}  </th>
                    <th> {{$category->updated_at}}  </th>
                    <th> <a href="{{ route('categories.show', $category->id)}}"  class="btn btn-primary"> Show </a> </th>
                    <th> <a href="{{ route('categories.edit', $category->id)}}"  class="btn btn-warning"> Edit </a> </th>
                    <!-- <th>  <a href="{{ route('categories.destroy', $category->id)}}"  class="btn btn-danger"> Delete </a> </th> -->
                    <td>
                        <form method="Post" action="{{route('categories.destroy',$category->id)}}">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>

                    </td>
                </tr>
            @endforeach    
        </table>

    </div>
@endsection    
