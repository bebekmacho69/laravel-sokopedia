@extends('layouts.app')

@section('content')
    <div class="row" style="padding-top: 70px;">
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
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($product as $p)
                                            <tr>
                                                <td style="width: 250px;">
                                                    <img class="card-img-top scale-on-hover" src="assets/img/{{ $p->productImage }}" alt="Card Image" style="width: 175px;">
                                                </td>
                                                <td style="width: 150px;">
                                                    <p>{{ $p->productName }}</p>
                                                </td>
                                                <td style="width: 150px;">
                                                    <p>IDR {{ $p->productPrice }}</p>
                                                </td>
                                                <td style="width: 150px;">
                                                    <p>{{ $p->productDescription }}</p>
                                                </td>
                                                <td style="width: 150px;"><p>{{ $p->description }}</p></td>
                                                <td style="width: 50px;"><p>{{ $p->quantity }}</p></td>
                                                <td style="width: 250px;">
                                                    <a class="btn btn-primary" type="button" href="/cart/edit/{{ $p->productID }}">Edit</a>
                                                    <a class="btn btn-primary" type="button" href="/cart/delete/{{ $p->productID }}">Delete</a>
                                                </td>
                                            </tr>
                                            </form>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <a class="btn btn-primary" style="float:right;" type="button" href="/cart/checkout/">Checkout</a>
                                    <a class="btn btn-primary" style="float:right;" type="button" href="/cart/clear/">Clear</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection