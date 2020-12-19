@extends('admin.crudPanel')
    @section('content')
    <div class="row" style="margin-bottom: 100px;">
        <div class="col">
            <div class="container-fluid" style="background: #d9d9d9;">
                <div class="row" style="background: #e6e6e6;padding-top: 0px;padding-bottom: 0px;border-color: #05ff00;">
                    <div class="col">
                        <h1 class="text-left">Products</h1>
                        <div class="table-responsive" style="width: 100%;float: left;">
                        @if(count($products) > 0)
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
                        @else
                            <p>No Products.</p>
                        @endif
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
                <div class="row">
                    <div class="col" style="padding-bottom: 24px;">
                        <h4 class="text-left">Insert item</h4>
                        <div class="table-responsive" style="width: 100%;float: left;">
                        <form action="/listProducts/insert" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="padding-left: 0px;">Item Name</th>
                                        <th style="padding-left: 0px;">Item Price</th>
                                        <th style="padding-left: 0px;">Item Stock</th>
                                        <th style="padding-left: 0px;">Item Category</th>
                                        <th style="padding-left: 0px;">Item Image</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="padding: 0px;padding-right: 0px;padding-left: 0px;padding-top: 0px;width: 133px;"><input type="text" name="productName" value="{{ old('productName') }}" style="width: 120px;margin-right: 0px;margin-left: 0px;"></td>
                                        <td style="padding: 0px;padding-right: 0px;padding-left: 0px;padding-top: 0px;width: 133px;"><input type="number" name="productPrice" value="{{ old('productPrice') }}" style="width: 120px;margin-right: 0px;margin-left: 0px;"></td>
                                        <td style="padding: 0px;padding-right: 0px;padding-left: 0px;padding-top: 0px;width: 133px;"><input type="number" name="productStock" value="{{ old('productStock') }}" style="width: 120px;margin-right: 0px;margin-left: 0px;"></td>
                                        <td style="padding: 0px;padding-right: 0px;padding-left: 0px;padding-top: 0px;width: 133px;">
                                            <select name="productCategoryID" id="0" style="margin-right : 15px; height : 30px;" required> 
                                                <option selected value="">Select Category</option>
                                                @foreach($categories as $c)
                                                    <option value="{{ $c->categoryID }}">{{ $c->categoryName }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td style="padding: 0px;">
                                            <input type="file" name="productImage" required>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div>
                            <div><strong>Description</strong></div>
                            <div><textarea name="productDescription" value="{{ old('productDescription') }}" style="height: 141px;width: 403px;"></textarea></div>
                            <button class="btn btn-primary" type="submit" style="height: 32px;padding-top: 0px;padding-bottom: 0px;margin-left: 0px;">Insert</button></div>
                            </div>
                        </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
 @endsection

