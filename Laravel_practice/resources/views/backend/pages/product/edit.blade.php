@extends('backend.mastertemplate.master')

@section('main-content')
<div class="container">
    <div class="card">
        <h1>Edit product</h1>
        <form action="{{route('updateproduct', $product->id)}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter product name"
                    value="{{ $product->name}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Product Description</label>
                <textarea class="form-control" name="des" id="des" placeholder="Enter product description"
                    value="{{ $product->des}}"></textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Product Price</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="price" id="price" placeholder="Enter product price"
                        value="{{ $product->price}}">
                </div>
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="text" class="form-control" name="quantity" id="quantity" placeholder="Enter quantity"
                    value="{{ $product->quantity}}">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" name="status" id="status" class="form-control">
                    <option value="">-----Select Status-----</option>
                    <option value="1" @if ($product->status == 1) selected @endif >Active</option>
                    <option value="2" @if ($product->status == 2) selected @endif >Inactive</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection

<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .card {
        width: 400px;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .card h1 {
        text-align: center;
    }

    /* Styles for form labels */
    .form-label {
        margin-bottom: 5px;
        font-weight: bold;
    }

    /* Styles for form inputs */
    .form-control {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        margin-bottom: 15px;
    }

    /* Styles for submit button */
    .btn-primary {
        width: 100%;
    }
</style>