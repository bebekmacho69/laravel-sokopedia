@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row">
                @foreach($transactionDetail as $tD)
                <div class="col-md-4" style="margin-bottom: 10px; margin-top: 10px;">
                    <div class="card" style="height: auto;">
                        <div class="card-body">
                            <img class="card-img-top scale-on-hover" src="/assets/img/{{ $tD->productImage }}" alt="Card Image">
                            <h4 class="card-title" style="font-size: 29px;margin-top: 10px;margin-bottom: 10px;color: rgb(0,128,255);">{{ $tD->productName }}<br></h4>
                            <h6 class="text-muted card-subtitle mb-2" style="font-size: 23px;margin-top: 10px;margin-bottom: 10px;">IDR {{ $tD->productPrice }}<br></h6>
                            <p>Order Note : <br> {{ $tD->description }}<br></p>
                            <p>Quantity : {{ $tD->quantity }}</p>
                            <a class="btn btn-primary" type="button" style="margin-left: 0px;margin-right: 0px;background: #04bc00;border-style: none;margin-top: 0px;margin-bottom: 5px;"  href="/history/getProduct/{{ $tD->productID }}" style="color: #f4f4f4;">Product Detail<br></a></button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection