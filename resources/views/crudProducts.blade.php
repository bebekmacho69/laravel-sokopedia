@extends('layouts.crudPanel')
                @section('content')
                <div class="row" style="background: #e6e6e6;padding-top: 0px;padding-bottom: 0px;border-color: #05ff00;">
                    <div class="col">
                        <h1 class="text-center">Products</h1>
                        <div class="table-responsive" style="width: 100%;float: left;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>item name</th>
                                        <th>description</th>
                                        <th>price</th>
                                        <th>stock</th>
                                        <th>image</th>
                                        <th>actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $p)
                                    <form action="/crudProducts/sendto_editModal" method="post"></form>
                                        <tr>
                                            <td>{{ $p->productID }}</td>
                                            <input type="hidden" name="some_ data[]" value="{{ $p->productID }}">
                                            <td>{{ $p->productName }}</td>
                                            <td>{{ $p->productDescription }}</td>
                                            <td>{{ $p->productPrice }}</td>
                                            <td>{{ $p->productStock }}</td>
                                            <td><img class="card-img-top scale-on-hover" src="assets/img/{{ $p->productImage }}" alt="Card Image" style="width: 30%;"></td>
                                            <td><button class="btn btn-primary" type="button submit" data-id="{{ $p->productID }}" data-target="#editModal" data-toggle="modal">Edit</button><button class="btn btn-primary" type="button" data-target="#deleteModal" data-toggle="modal">Delete</button></td>
                                        </tr>
                                    </form>
                                </tbody>    
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="modal fade" role="dialog" tabindex="-1" id="insertModal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Modal Title</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                    <div class="modal-body">
                                        <p>The content of your modal.</p>
                                        <div class="table-responsive" style="width: 100%;float: left;">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Item Name</th>
                                                        <th>Description</th>
                                                        <th>Price</th>
                                                        <th>Stock</th>
                                                        <th>Image</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="padding: 0px;padding-right: 0px;padding-left: 0px;padding-top: 0px;width: 133px;"><input type="text" style="width: 120px;margin-right: 0px;margin-left: 5px;"></td>
                                                        <td style="padding: 0px;padding-right: 0px;padding-left: 0px;padding-top: 0px;width: 133px;"><input type="text" style="width: 120px;margin-right: 0px;margin-left: 5px;"></td>
                                                        <td style="padding: 0px;padding-right: 0px;padding-left: 0px;padding-top: 0px;width: 133px;"><input type="text" style="width: 120px;margin-right: 0px;margin-left: 5px;"></td>
                                                        <td style="padding: 0px;padding-right: 0px;padding-left: 0px;padding-top: 0px;width: 133px;"><input type="text" style="width: 120px;margin-right: 0px;margin-left: 5px;"></td>
                                                        <td style="padding: 0px;padding-right: 0px;padding-left: 0px;padding-top: 0px;width: 133px;"><input type="text" style="width: 120px;margin-right: 0px;margin-left: 5px;"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Insert</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" role="dialog" tabindex="-1" id="editModal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit item : ID (<span id="selectedProductID"></span>)</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                    <div class="modal-body">
                                        <div style="float: left;">
                                            <p style="width: 92px;float: left;">Item name</span></p><input type="text" style="width: 175px;margin-right: 16px;" placeholder="Old" readonly=""><input type="text"></div>
                                        <div style="float: left;">
                                            <p style="width: 92px;float: left;">Item Description</p><input type="text" style="width: 175px;margin-right: 16px;" placeholder="Old" readonly=""><input type="text"></div>
                                        <div style="float: left;">
                                            <p style="width: 92px;float: left;">Item Price</p><input type="text" style="width: 175px;margin-right: 16px;" placeholder="Old" readonly=""><input type="text"></div>
                                        <div style="float: left;">
                                            <p style="width: 92px;float: left;">Item Stock</p><input type="text" style="width: 175px;margin-right: 16px;" placeholder="Old" readonly=""><input type="text"></div>
                                        <div style="float: left;">
                                            <p style="width: 92px;float: left;">Item image</p><input type="text" style="width: 175px;margin-right: 16px;" placeholder="old" readonly=""><input type="text"></div>
                                    </div>
                                    <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Edit</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" role="dialog" tabindex="-1" id="deleteModal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Delete Item : Name</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                    <div class="modal-body">
                                        <p>Are you sure do you want to delete :&nbsp;</p>
                                        <p>ID, ITEM NAME</p>
                                    </div>
                                    <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">No</button><button class="btn btn-primary" type="button">Yes</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endsection

