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
                                        <td><button class="btn btn-primary" type="button" data-target="#editModal" data-toggle="modal" style="background: #04bc00;">Edit</button><button class="btn btn-primary" type="button" data-target="#deleteModal" data-toggle="modal"
                                                style="background: #04bc00;">Delete</button></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col" style="padding-bottom: 24px;">
                        <h4 class="text-left">Insert Category</h4>
                        <div class="table-responsive" style="width: 100%;float: left;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="padding-left: 0px;">Category ID</th>
                                        <th style="padding-left: 0px;">Category Name</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="padding: 0px;padding-right: 25px;padding-left: 0px;padding-top: 0px;width: 103px;"><input type="text" style="width: 120px;margin-right: 0px;margin-left: 0px;"></td>
                                        <td style="padding: 0px;padding-right: 25px;padding-left: 0px;padding-top: 0px;width: 133px;"><input type="text" style="width: 120px;margin-right: 0px;margin-left: 0px;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <div></div>
                            <div></div><button class="btn btn-primary" type="button" style="height: 32px;padding-top: 0px;padding-bottom: 0px;margin-left: 0px;background: #04bc00;" data-target="#insertModal" data-toggle="modal">Insert</button></div>
                    </div>
                </div>
    @endsection