@extends('layouts.app')

@section('content')
    @isset($viewProducts->productID)
    @endisset
    <div class="container">
        <div class="row">
            @foreach($viewProducts as $vP)
                <div class="col-md-4" style="margin-bottom: 10px; margin-top: 10px;">
                    <div class="card" style="height: auto;">
                        <div class="card-body">
                            <img class="card-img-top scale-on-hover" src="/assets/img/{{ $vP->productImage }}" alt="Card Image">
                            <h4 class="card-title" style="font-size: 29px;margin-top: 10px;margin-bottom: 10px;color: rgb(0,128,255);">{{ $vP->productName }}<br></h4>
                            <h6 class="text-muted card-subtitle mb-2" style="font-size: 23px;margin-top: 10px;margin-bottom: 10px;">IDR {{ $vP->productPrice }}<br></h6>
                            @guest
                                @if(Route::has('register'))
                            <button class="btn btn-primary" type="button" style="margin-left: 0px;margin-right: 0px;background: #04bc00;border-style: none;margin-top: 0px;margin-bottom: 5px;">
                                <a href="/login" style="color: #f4f4f4;">Product Detail<br></a>
                            </button>
                                @endif
                            @else
                                <a class="btn btn-primary" type="button" style="margin-left: 0px;margin-right: 0px;background: #04bc00;border-style: none;margin-top: 0px;margin-bottom: 5px;" href="/productDetails/get/{{ $vP->productID }}">Product Detail<br></a>
                            @endguest
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
@endsection