@extends('layouts.app')

@section('content')
    <div class="row" style="background: url(&quot;assets/img/FtC_The_Wall_Full_Building.png&quot;) center / cover no-repeat;padding-top: 70px;">
        <div class="col" style="margin-bottom: 100px;">
            <div class="container-fluid" style="background: #d9d9d9;">
                <div class="row" style="background: #e6e6e6;padding-top: 60px;padding-bottom: 60px;border-color: #05ff00;">
                    <div class="col">
                        <h1 style="text-align: center;margin-top: -56px;">Cart</h1>
                        <div class="row">
                            <div class="col d-xl-flex justify-content-xl-center">
                                <div class="table-responsive text-center" style="width: 750px;">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Item</th>
                                                <th>Price</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width: 250px;">
                                                    <p>Item name</p><img class="card-img-top scale-on-hover" src="assets/img/henry%20stickmin.png" alt="Card Image" style="width: 175px;"></td>
                                                <td style="width: 256px;">
                                                    <p>IDR 5000000</p>
                                                    <p>Description Description Description</p>
                                                </td>
                                                <td><button class="btn btn-primary" type="button">Edit</button><button class="btn btn-primary" type="button">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 250px;">
                                                    <p>Item name</p><img class="card-img-top scale-on-hover" src="assets/img/henry%20stickmin.png" alt="Card Image" style="width: 175px;"></td>
                                                <td style="width: 256px;">
                                                    <p>IDR 5000000</p>
                                                    <p>Description Description Description</p>
                                                </td>
                                                <td><button class="btn btn-primary" type="button">Edit</button><button class="btn btn-primary" type="button">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 250px;">
                                                    <p>Item name</p><img class="card-img-top scale-on-hover" src="assets/img/henry%20stickmin.png" alt="Card Image" style="width: 175px;"></td>
                                                <td style="width: 256px;">
                                                    <p>IDR 5000000</p>
                                                    <p>Description Description Description</p>
                                                </td>
                                                <td><button class="btn btn-primary" type="button">Edit</button><button class="btn btn-primary" type="button">Delete</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection