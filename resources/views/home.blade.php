@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} <br>
                    <button class="btn btn-primary" type="button" style="background: #04bc00;border-style: none;margin-top:10px;">
                        <a href="/index" style="color:white;">Catalog</a>
                    </button>
                    @if (Auth::user()->is_admin == 1)
                        <button class="btn btn-primary" type="button" style="background: #04bc00;border-style: none;margin-top:10px;">
                            <a href="/listProducts" style="color:white;">Admin panel</a>
                        </button>
                     @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
