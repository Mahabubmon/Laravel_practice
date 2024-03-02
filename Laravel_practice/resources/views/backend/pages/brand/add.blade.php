@extends('backend.mastertemplate.master')

@section('main-content')
<div class="container">
    <div class="card">
        <h1>Add Brand</h1>
        <form action="{{route('storebrand')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="brand_name" class="form-label">Brand Name</label>
                <input type="text" class="form-control" name="brand_name" id="brand_name" placeholder="Enter Brand name">
                @error('brand_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <div class="mb-3">
                <label for="cat_id" class="form-label">Select Category</label>
                <select  name="cat_id" id="cat_id" class="form-control">
                    <option value="">-----Select Category-----</option>
                    @foreach($cats as $cat)
                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="brand_image" class="form-label">Brand Image</label>
                <div class="input-group">
                    <input class="form-control" type="file" name="brand_image" id="brand_image" >
                </div>
            </div>
            <div class="mb-3">
                <label for="brand_images" class="form-label">Brand Gallery</label>
                <div class="input-group">
                    <input type="file" class="form-control" name="brand_images[]" id="brand_images" multiple>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Add Brand</button>
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