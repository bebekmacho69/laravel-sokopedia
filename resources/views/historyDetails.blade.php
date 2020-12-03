@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-4" style="margin-bottom: 10px; margin-top: 10px;">
                    <div class="card" style="height: auto;">
                        <div class="card-body"><img class="card-img-top scale-on-hover" src="assets/img/henry stickmin.png" alt="Card Image">
                            <h4 class="card-title" style="font-size: 29px;margin-top: 10px;margin-bottom: 10px;color: rgb(0,128,255);">ProductName<br></h4>
                            <h6 class="text-muted card-subtitle mb-2" style="font-size: 23px;margin-top: 10px;margin-bottom: 10px;">IDR 15000000<br></h6><button class="btn btn-primary" type="button" style="margin-left: 0px;margin-right: 0px;background: #04bc00;border-style: none;margin-top: 0px;margin-bottom: 5px;" onclick="/productDetails.html"><a href="/productDetails" style="color: #f4f4f4;">Product Detail<br></a></button></div>
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