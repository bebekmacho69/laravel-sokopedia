@extends('layouts.app')

@section('content')
        <div class="row" style="padding-top: 70px; margin-left: 3%; margin-right: 3%;">
            <div class="col" >
            @foreach($transaction as $t)
                <div class="container-fluid" style="background: #d9d9d9;">
                <div class="row">
                    <div class="col">
                        <h6 class="text-muted card-subtitle mb-2" style="font-size: 23px;padding-top: 3%;padding-bottom: 1%;float:left;">Viewing Transaction : {{ $t->created_at }}<br></h6>
                    </div>
                    <div class="col">
                        <h6 class="text-muted card-subtitle mb-2" style="font-size: 23px;padding-top: 3%;padding-bottom: 1%;float:right;">Total Price : IDR {{ $totalPrice }}</h6>
                    </div>
                </div>
                </div>
            @endforeach
            </div>
        </div>
        <div class="container" style="margin-bottom:100%;">
            <div class="row" >
                @foreach($transactionDetail as $tD)
                <div class="col-md-4" style="margin-bottom: 10px; margin-top: 10px;">
                    <div class="card" style="height: 100%;">
                        <div class="card-body">
                            <img class="card-img-top scale-on-hover" src="/assets/img/{{ $tD->productImage }}" alt="Card Image">
                            <h4 class="card-title" style="font-size: 29px;margin-top: 10px;margin-bottom: 10px;color: rgb(0,128,255);">{{ $tD->productName }}<br></h4>
                            <h6 class="text-muted card-subtitle mb-2" style="font-size: 23px;margin-top: 10px;margin-bottom: 10px;">IDR {{ $tD->productPrice }}<br></h6> <br>
                            <h6 class="text-muted card-subtitle mb-2" style="font-size: 18px;margin-top: 10px;margin-bottom: 10px;">Quantity : {{ $tD->quantity }}<br></h6>
                            <h6 class="text-muted card-subtitle mb-2" style="font-size: 18px;margin-top: 10px;margin-bottom: 10px;">Subtotal IDR {{ $tD->productPrice*$tD->quantity }}<br></h6> <br>
                            <p>Order Note : <br> {{ $tD->description }}<br></p>
                        </div>
                        <a class="btn btn-primary" type="button" style="margin-left: 6%;margin-right: 50%;margin-top: 0px;margin-bottom: 6%;" href="/history/getProduct/{{ $tD->productID }}">Product Detail<br></a>
                    </div>
                </div>

                @endforeach
            </div>
            <div class="d-xl-flex justify-content-xl-center" style="padding-top: 10px;padding-bottom: 10px;">
                    <div class="btn-group d-xl-flex justify-content-xl-center" role="group" style="width: 186px;">
						{{ $transactionDetail->links() }}
					</div>
				</div>
        </div>
    </div>
@endsection