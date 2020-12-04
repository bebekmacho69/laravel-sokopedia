@extends('layouts.app')

@section('content')
    <div class="row" style="background: url(&quot;assets/img/FtC_The_Wall_Full_Building.png&quot;) center / cover no-repeat;padding-top: 70px;">
        <div class="col" style="margin-bottom: 100px;">
            <div class="container-fluid" style="background: #d9d9d9;">
                <div class="row" style="background: #e6e6e6;padding-top: 60px;padding-bottom: 60px;border-color: #05ff00;">
                    <div class="col" style="padding-right: 120px;padding-left: 50px;">
                        <div class="card" style="height: 364px;">
                            <div class="card-body d-xl-flex justify-content-xl-end">
                                <div class="col"><img class="card-img-top scale-on-hover" src="assets/img/henry%20stickmin.png" alt="Card Image" style="width: 451px;margin-top: 37px;"></div>
                                <div class="col">
                                    <h4 style="font-size: 29px;margin-top: 10px;margin-bottom: 10px;color: rgb(0,128,255);">Item Name<br></h4>
                                    <h6 class="text-muted mb-2" style="font-size: 23px;margin-top: 10px;margin-bottom: 10px;">IDR 5000000<br></h6>
                                    <p>Description&nbsp;Description&nbsp;Description&nbsp;Description&nbsp;Description&nbsp;<br><br></p>
                                    <p class="d-xl-flex justify-content-xl-start" style="margin-bottom: 3px;width: 278px;">Quantity<input class="d-xl-flex justify-content-xl-start" type="number" style="width: 102px;height: 30px;margin-left: 10px;"></p><button class="btn btn-primary" type="button" style="background: #04bc00;border-style: none;margin-top: 10px;">Add to cart</button></div>
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
@endsection