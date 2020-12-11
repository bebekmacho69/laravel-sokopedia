@extends('admin.crudPanel')
    @section('content')
    <div class="row" style="margin-bottom: 100px;">
        <div class="col">
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
                                        <th>Category</th>
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
                                        <td>{{ $p->categoryName }}</td>
                                        <td>{{ $p->productStock }}</td>
                                        <td>{{ $p->productImage }}</td>
                                        <td>
                                            <a class="btn btn-primary" style="margin : 2%;" href="/editProduct/{{ $p->productID }}">Edit</a>
                                            <a class="btn btn-primary" style="margin : 2%;" href="/listProducts/delete/{{ $p->productID }}">Delete</a>
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
                        {{ $products->links() }}
                    </div>
                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>
 @endsection

