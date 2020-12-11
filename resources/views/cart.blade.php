@extends('layouts.app')

@section('content')
    <div class="row" style="padding-top: 70px;margin-bottom:100%;">
        <div class="col" style="margin-bottom: 100px;">
            <div class="container-fluid" style="background: #d9d9d9;">
                <div class="row" style="background: #e6e6e6;padding-top: 60px;padding-bottom: 60px;border-color: #05ff00;">
                    <div class="col">
                        <h1 style="text-align: center;margin-top: -56px;">Cart</h1>
                        <div class="row">
                            <div class="col d-xl-flex justify-content-xl-center">
                                <div class="table-responsive text-center" style="width: 100%;">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Item</th>
                                                <th>Price</th>
                                                <th>Description</th>
                                                <th>User Note</th>
                                                <th>Quantity</th>
                                                <th>Subtotal</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($product as $p)
                                            <tr>
                                                <td style="width: 250px;">
                                                    <img class="card-img-top scale-on-hover" src="assets/img/{{ $p->productImage }}" alt="Card Image" style="width: 175px;">
                                                </td>
                                                <td style="width: 150px; padding-top:6%;">
                                                    <p>{{ $p->productName }}</p>
                                                </td>
                                                <td style="width: 150px; padding-top:6%;">
                                                    <p>IDR {{ $p->productPrice }}</p>
                                                </td>
                                                <td style="width: 150px; padding-top:6%; padding-bottom:6%;">
                                                    <p>{{ $p->productDescription }}</p>
                                                </td>
                                                <td style="width: 150px; padding-top:6%;">
                                                    <p>{{ $p->description }}</p>
                                                </td>
                                                <td style="width: 50px; padding-top:6%;">
                                                    <p>{{ $p->quantity }}</p>
                                                </td>
                                                <td style="width: 150px; padding-top:6%;">
                                                    <p>IDR {{ $p->productPrice*$p->quantity }}</p>
                                                </td>
                                                <td style="width: 250px; padding:6%;">
                                                    <a class="btn btn-primary" type="button" href="/cart/edit/{{ $p->productID }}">Edit</a>
                                                    <a class="btn btn-primary" type="button" href="/cart/delete/{{ $p->productID }}">Delete</a>
                                                </td>
                                            </tr>
                                            </form>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="d-xl-flex justify-content-xl-center" style="padding-top: 10px;padding-bottom: 10px;">
                                        <div class="btn-group d-xl-flex justify-content-xl-center" role="group" style="width: 186px;">
                                            {{ $product->links() }}
                                        </div>
                                    </div>
                                    <div style="float:right;"> 
                                        Total : IDR {{ $sum }} <br>
                                        <a class="btn btn-primary" style="float:right; margin-left : 1px;" type="button" href="/cart/checkout/">Checkout</a>
                                        <a class="btn btn-primary" style="float:right; background-color : red;" type="button" href="/cart/clear/">Clear</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection