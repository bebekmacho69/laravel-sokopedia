@extends('layouts.app')

@section('content')
    <div class="row" style="background: url(&quot;assets/img/FtC_The_Wall_Full_Building.png&quot;) center / cover no-repeat;padding-top: 70px;margin-bottom: 100%;">
        <div class="col" style="margin-bottom: 100px;">
            <div class="container-fluid" style="background: #d9d9d9;">
                <div class="row" style="background: #e6e6e6;padding-top: 60px;padding-bottom: 60px;border-color: #05ff00;">
                    <div class="col" style="padding-right: 120px;padding-left: 50px;">
                    <h6 class="text-muted mb-2" style="font-size: 23px;margin-top: 10px;margin-bottom: 10px;">This is a preview of your bought product<br></h6>
                        <div class="card" style="height: auto;">
                            <div class="card-body d-xl-flex justify-content-xl-end">
                            @foreach($products as $p)
                                <div class="col card-img-top scale-on-hover" style="display:flex; align-items:center; justify-content: center;" >
                                    <img src="/assets/img/{{ $p->productImage }}" alt="Card Image">
                                </div>
                                <div class="col">
                                        <h4 style="font-size: 29px;margin-top: 10px;margin-bottom: 10px;color: rgb(0,128,255);">{{ $p->productName }}<br></h4>
                                        <h6 class="text-muted mb-2" style="font-size: 23px;margin-top: 10px;margin-bottom: 10px;">IDR {{ $p->productPrice }}<br></h6>
                                        <p>{{ $p->productDescription }}<br><br></p>
                                        <a class="btn btn-primary" style="border-style: none;margin-top: 10px;" type="button" href="/productDetails/get/{{ $p->productID }}">View retail product</a>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-basic" style="background: rgb(35,35,35);border-color: #05ff00;border-top-style: solid;">
        <footer>
            <ul class="list-inline">
                <li class="list-inline-item"></li>
                <li class="list-inline-item"></li>
            </ul>
            <p class="copyright">bebekmacho69 @ 2020</p>
        </footer>
    </div>
@endsection