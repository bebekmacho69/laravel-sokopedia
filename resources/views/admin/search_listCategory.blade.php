@extends('admin.crudPanel')
    @section('content')
                <div class="row" style="background: #e6e6e6;padding-top: 0px;padding-bottom: 0px;border-color: #05ff00;">
                    <div class="col">
                        <h1 class="text-left">Categories</h1>
                        <div class="table-responsive" style="width: 100%;float: left;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $c)
                                    <tr>
                                        <td>{{ $c->categoryID }}</td>
                                        <td>{{ $c->categoryName }}</td>
                                        <td>
                                            <a class="btn btn-primary" type="button" href="/editCategory/{{ $c->categoryID }}">Edit</a>
                                            <a class="btn btn-primary" type="button" href="/listCategory/delete/{{ $c->categoryID }}">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="d-xl-flex justify-content-xl-center" style="padding-top: 10px;padding-bottom: 10px;">
                    <div class="btn-group d-xl-flex justify-content-xl-center" role="group" style="width: 186px;">
                        {{ $categories->links() }}
                    </div>
                </div>
    @endsection