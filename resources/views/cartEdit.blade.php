@extends('layouts.app')

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
    <div class="row" style="background: url(&quot;assets/img/FtC_The_Wall_Full_Building.png&quot;) center / cover no-repeat;padding-top: 70px;margin-bottom: 100%;">
        <div class="col" style="margin-bottom: 100px;">
            <div class="container-fluid" style="background: #d9d9d9;">
                <div class="row" style="background: #e6e6e6;padding-top: 60px;padding-bottom: 60px;border-color: #05ff00;">
                    <div class="col">
                        <h1 style="text-align: center;margin-top: -56px;">Edit Cart Item</h1>
                        <div class="row">
                            <div class="col d-xl-flex justify-content-xl-center">
                                <div class="table-responsive text-center" style="width: 1000px;">
                                    @foreach($table as $p)
                                    <form action="/cart/update" method="post">
                                        {{ csrf_field() }}
                                        <!-- hidden id -->
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                <th style="padding-left: 0px;">Product Image</th>
                                                    <th style="padding-left: 0px;width:300px;">Selected item name</th>
                                                    <th style="padding-left: 0px;">Quantity</th>
                                                    <th style="padding-left: 0px;">Description</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="padding: 0px;padding-right: 0px;padding-left: 0px;padding-top: 0px;width: 133px;">
                                                        <img class="card-img-top scale-on-hover" src="/assets/img/{{ $p->productImage }}" alt="Card Image" style="width: 175px;">
                                                    </td>
                                                    <td style="padding: 0px;padding-right: 0px;padding-left: 0px;padding-top: 0px;width: 133px;">
                                                        <p>{{ $p->productName }}</p>
                                                    </td>
                                                    <td style="padding: 0px;padding-right: 0px;padding-left: 0px;padding-top: 0px;width: 133px;"><input type="number" style="width: 120px;margin-right: 0px;margin-left: 0px;" name="userQuantity" value="{{ $p->quantity }}"></td>
                                                    <td style="padding: 0px;padding-right: 0px;padding-left: 0px;padding-top: 0px;width: 133px;">
                                                        <div>
                                                            <textarea name="userDescription" style="height: 141px;width: 403px;">{{ $p->description }}</textarea>
                                                        </div>
                                                    </td>
                                                    <td style="padding: 0px;padding-right: 0px;padding-left: 0px;padding-top: 0px;width: 133px;">
                                                    <input type="hidden" name="productID" value="{{ $p->productID }}">
                                                    <input class="btn btn-primary" style="height: 32px;padding-top: 0px;padding-bottom: 0px;margin-left: 0px; margin-bottom:25px;" type="submit" value="Update">       
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                    @endforeach
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