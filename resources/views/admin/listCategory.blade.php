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
                <div class="row">
                    <div class="col" style="padding-bottom: 24px;">
                        <form action="/listCategory/insert" method="post">
                        {{ csrf_field() }}
                        <h4 class="text-left">Insert Category</h4>
                        <div class="table-responsive" style="width: 100%;float: left;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="padding-left: 0px;">Category Name</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="padding: 0px;padding-right: 25px;padding-left: 0px;padding-top: 0px;width: 103px;"><input type="text" name="categoryName" style="width: 120px;margin-right: 0px;margin-left: 0px;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                            <input class="btn btn-primary" type="submit" style="height: 32px;padding-top: 0px;padding-bottom: 0px;margin-left: 0px;" value="Insert">
                        </form>
                    </div>
                </div>
    @endsection