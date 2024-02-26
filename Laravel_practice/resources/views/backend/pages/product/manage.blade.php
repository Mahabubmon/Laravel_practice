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
                    @if($product->status == 1)
                    <a href="{{route('activeproduct', $product->id)}}" class="btn btn-info">Active</a>
                    @else
                    <a href="{{route('inactiveproduct', $product->id)}}" class="btn btn-danger">Inactive</a>
                    @endif
                </td>
                <td>
                    <a href="{{route('editproduct', $product->id)}}" class="btn btn-info">Edit</a>
                    <button data-bs-toggle="modal" data-bs-target="#delete{{$product->id}}" class="btn btn-danger">
                        Delete</button>

                    <!-- Delete Modal -->
                    <div class="modal fade" id="delete{{$product->id}}" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel{{$product->id}}">Confirm Deletion</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this product?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                    <a href="{{route('deleteproduct' , $product->id)}}" type="button"
                                        class="btn btn-primary">Yes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Delete Modal -->

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection