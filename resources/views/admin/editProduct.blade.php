@extends('admin.crudPanel')
@section('content')
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
        <div class="col" style="margin-bottom: 100px;">
            <div class="container-fluid" style="background: #d9d9d9;">
                <div class="row">
                    <div class="col" style="padding-bottom: 24px;">
                        <h4 class="text-left">Selected Item</h4>
                        <div class="table-responsive" style="width: 100%;float: left;">
                        @foreach($products as $p)
                        <form action="/editProduct/update" method="post">
                            {{ csrf_field() }}
                            <!-- hidden id -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="padding-left: 0px;">Item Name</th>
                                        <th style="padding-left: 0px;">Item Price</th>
                                        <th style="padding-left: 0px;width: 143px;">Item Stock</th>
                                        <th style="padding-left: 0px;">Item Image</th>
                                        <th style="padding-left: 0px;">Item Category</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <input type="hidden" name="productID" value="{{ $p->productID }}"> <br/>
                                        <td style="padding: 0px;padding-right: 0px;padding-left: 0px;padding-top: 0px;width: 133px;"><input type="text" style="width: 120px;margin-right: 0px;margin-left: 0px;" name="productName" value="{{ $p->productName }}"></td>
                                        <td style="padding: 0px;padding-right: 0px;padding-left: 0px;padding-top: 0px;width: 133px;"><input type="text" style="width: 120px;margin-right: 0px;margin-left: 0px;" name="productPrice" value="{{ $p->productPrice }}"></td>
                                        <td style="padding: 0px;padding-right: 0px;padding-left: 0px;padding-top: 0px;width: 133px;"><input type="text" style="width: 120px;margin-right: 0px;margin-left: 0px;" name="productStock" value="{{ $p->productStock }}"></td>
                                        <td style="padding: 0px;padding-right: 0px;padding-left: 0px;padding-top: 0px;width: 133px;"><input type="text" style="width: 120px;margin-right: 0px;margin-left: 0px;" name="productImage" value="{{ $p->productImage }}"></td>
                                        <td style="padding: 0px;padding-right: 0px;padding-left: 0px;padding-top: 0px;">
                                            <select name="productCategoryID" id="0" style="width: 133px;" required> 
                                                <option selected value="{{ $selectedCategory->categoryID }}">Current : {{ $selectedCategory->categoryName }}</option>
                                                @foreach($categories as $c)
                                                    <option value="{{ $c->categoryID }}">{{ $c->categoryName }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td style="padding: 0px;padding-right: 0px;padding-left: 0px;padding-top: 0px;width: 133px;"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div><strong>Description</strong></div>
                            <div><textarea name="productDescription" style="height: 141px;width: 403px;">{{ $p->productDescription }}</textarea></div>
                            <input class="btn btn-primary" style="height: 32px;padding-top: 0px;padding-bottom: 0px;margin-left: 0px;" type="submit" value="Update">
                        </form>
                        @endforeach
                        </div>
                        <div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection