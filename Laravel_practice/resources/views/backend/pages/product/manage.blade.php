@extends('backend.mastertemplate.master')

@section('main-content')
<div class="container">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>SL</th>
                <th>Product Name</th>
                <th>Product Description </th>
                <th>Product Price</th>
                <th>Product Quantity</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->des}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->quantity}}</td>
                <td>

                </td>
                <td>
                    <a href="#" class="btn btn-info">Edit</a>
                    <a href="{{route('deleteproduct' , $product->id)}}" class="btn btn-danger">Delete</a>
                </td>

            </tr>
            @endforeach

        </tbody>
</div>
@endsection