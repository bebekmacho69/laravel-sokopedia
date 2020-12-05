<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <!-- <title>$sokopedia-home</title> -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>   

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/styles.css"> 

</head>
<body style="background: url(&quot;assets/img/FtC_The_Wall_Full_Building.png&quot;) no-repeat;background-size: cover; height:110vh;">
    <div id="app">
    <ul class="nav nav-tabs d-xl-flex justify-content-xl-center" id="NavbarDark" style="background: #f4f4f4;margin-top: 0px;padding-top: 5px;padding-bottom: 5px;border-color: rgb(5,255,0);/*border-top: 1px solid rgb(0,128,255);*/border-bottom-style: solid;/*border-bottom-color: rgb(0,127,255);*/">
        <li class="nav-item"><a class="nav-link" href="/index" style="color: #04bc00;font-size: 16px;">$okopedia</a></li>
        <li class="nav-item" style="width: 580px;margin-bottom: 0px;margin-top: 0px;">
            <form class="form-inline mr-auto" target="_self">
                <div class="form-group"><label for="search-field"><i class="fa fa-search" style="border-color: rgb(0,255,255);color: rgb(146,146,146);"></i></label><input class="form-control search-field" type="search" id="search-field-1" name="search" style="width: 467px;margin-left: 9px;margin-right: 6px;"></div>
                <a
                    class="btn btn-light action-button" role="button" href="#" style="border-style: solid;border-color: #05ff00;">Search</a>
            </form>
        </li>
        @guest
            <li class="nav-item"><a class="nav-link" href="/login" style="color: #04bc00;">Login</a></li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}" style="color: #04bc00;">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item" style="margin-right: 5px;margin-left: 5px;"><button class="btn btn-primary" type="button" style="background: #04bc00;border-style: none;" onclick="cart.html">
                <a href="/cart" style="color: #f4f4f4;">{{ __('Cart') }}<br></a></button>
            </li>
            <li class="nav-item" style="margin-right: 5px;margin-left: 5px;">
                <button class="btn btn-primary" type="button" style="background: #04bc00;border-style: none;" onclick="cart.html">
                    <a href="/history" style="color: #f4f4f4;">{{ __('History') }}<br></a>
                </button>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style="color: #04bc00;">{{ Auth::user()->name }}</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/home"> Dashboard </a>
                    <a class="dropdown-item" 
                        onclick="event.preventDefault(); 
                        document.getElementById('logout-form').submit();" 
                        href="{{ route('logout') }}">
                    {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
        <main class="py-4">
            <div class="row" style="padding-top: 70px;">
                <div class="col" style="margin-bottom: 100px;">
                    <div class="container-fluid" style="background: #d9d9d9;">
                    <div class="row" style="margin-right: 0px;margin-left: 0px;padding-top: 18px;padding-bottom: 18px;">
                    <div class="col" style="padding-right: 0px;padding-left: 0px;"><button class="btn btn-primary" type="button" style="background: #04bc00;border-style: none;margin-right: 12px;" onclick="cart.html"><a href="/crudUsers" style="color: #f4f4f4;">Users<br></a></button><button class="btn btn-primary" type="button"
                            style="background: #04bc00;border-style: none;margin-right: 12px;" onclick="cart.html"><a href="/crudProducts" style="color: #f4f4f4;">Products<br></a></button><button class="btn btn-primary" type="button" style="background: #04bc00;border-style: none;padding-right: 0px;"
                            onclick="cart.html"><a href="/crudTransactions" style="color: #f4f4f4;margin-right: 12px;">Transactions<br></a></button></div>
                    <div class="col" style="padding-right: 17px;padding-left: 0px;">
                        <form class="form-inline mr-auto" target="_self" style="width: 572px;float: right;">
                            <div class="form-group"><label for="search-field"><i class="fa fa-search" style="border-color: rgb(0,255,255);color: rgb(146,146,146);"></i></label><input class="form-control search-field" type="search" id="search-field-2" name="search" style="width: 467px;margin-left: 9px;margin-right: 6px;"
                                    placeholder="Item Name"><button class="btn btn-primary" type="button" style="background: #04bc00;border-style: none;padding-right: 0px;padding-left: auto;" onclick="cart.html"><a href="history.html" style="color: #f4f4f4;margin-right: 12px;">Search<br></a></button></div>
                        </form>
                    </div>
                </div>
                    @yield('content')
                    <div class="row">
                    <div class="col" style="padding-bottom: 24px;">
                        <h4 class="text-left">Insert item</h4><button class="btn btn-primary" type="button" style="height: 32px;padding-top: 0px;padding-bottom: 0px;" data-target="#insertModal" data-toggle="modal">Insert</button></div>
                </div>
            </div>
        </div>
    </div>
        </main>
    </div>
</body>
</html>
