@extends('backend.mastertemplate.master')

@section('main-content')
<div class="container">
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">Add Category</button>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        <tbody class="allData">

        </tbody>
        </thead>
    </table>





    <!-- For add category Modal -->
    <div class="modal fade" id="add" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModal">Add New Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Category Name</label>
                        <input type="text" class="category_name form-control" placeholder="Name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="des">Category Description</label>
                        <input type="text" class="category_des form-control" placeholder="Description" id="des">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-control category_status">
                            <option value="">-----Select Status-----</option>
                            <option value="1">Active</option>
                            <option value="2">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <a class="add-category btn btn-primary" name="add-category">Add
                        Category</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End  category Modal -->
    <!-- For Delete category Modal -->
    <div class="modal fade" id="add" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModal">Add New Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Category Name</label>
                        <input type="text" class="category_name form-control" placeholder="Name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="des">Category Description</label>
                        <input type="text" class="category_des form-control" placeholder="Description" id="des">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-control category_status">
                            <option value="">-----Select Status-----</option>
                            <option value="1">Active</option>
                            <option value="2">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <a class="add-category btn btn-primary" name="add-category">Add
                        Category</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delete category Modal -->
</div>



@endsection