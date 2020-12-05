@extends('admin.crudPanel')
    @section('content')
    <div class="row">
        <div class="col" style="margin-bottom: 100px;">
            <div class="container-fluid" style="background: #d9d9d9;">
                <div class="row" style="background: #e6e6e6;padding-top: 0px;padding-bottom: 0px;border-color: #05ff00;">
                    <div class="col">
                        <h1 class="text-left">Products</h1>
                        <div class="table-responsive" style="width: 100%;float: left;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product Name</th>
                                        <th>Product Description</th>
                                        <th>Product Price</th>
                                        <th>Product Stock</th>
                                        <th>Product Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $p)
                                    <tr>
                                        <td>{{ $p->productID }}</td>
                                        <td>{{ $p->productName }}</td>
                                        <td>{{ $p->productDescription }}</td>
                                        <td>{{ $p->productPrice }}</td>
                                        <td>{{ $p->productStock }}</td>
                                        <td>{{ $p->productImage }}</td>
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
                        <h4 class="text-left">Insert item</h4>
                        <div class="table-responsive" style="width: 100%;float: left;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="padding-left: 0px;">Item Name</th>
                                        <th style="padding-left: 0px;">Item Price</th>
                                        <th style="padding-left: 0px;width: 143px;">Item Description</th>
                                        <th style="padding-left: 0px;">Item Image</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="padding: 0px;padding-right: 0px;padding-left: 0px;padding-top: 0px;width: 133px;"><input type="text" style="width: 120px;margin-right: 0px;margin-left: 0px;"></td>
                                        <td style="padding: 0px;padding-right: 0px;padding-left: 0px;padding-top: 0px;width: 133px;"><input type="text" style="width: 120px;margin-right: 0px;margin-left: 0px;"></td>
                                        <td style="padding: 0px;padding-right: 0px;padding-left: 0px;padding-top: 0px;width: 133px;"><input type="text" style="width: 120px;margin-right: 0px;margin-left: 0px;"></td>
                                        <td style="padding: 0px;padding-right: 0px;padding-left: 0px;padding-top: 0px;width: 133px;"><input type="text" style="width: 120px;margin-right: 0px;margin-left: 0px;"></td>
                                        <td style="padding: 0px;padding-right: 0px;padding-left: 0px;padding-top: 0px;width: 133px;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <div><strong>Description</strong></div>
                            <div><textarea style="height: 141px;width: 403px;"></textarea></div><button class="btn btn-primary" type="button" style="height: 32px;padding-top: 0px;padding-bottom: 0px;margin-left: 0px;background: #04bc00;" data-target="#insertModal"
                                data-toggle="modal">Insert</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                @endsection

