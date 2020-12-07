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
                    <a href="/index" class="btn btn-primary" type="button" style="background: #04bc00;border-style: none;margin-top:10px;">Catalog</a>
                    @if (Auth::user()->is_admin == 1)
                        <a href="/listProducts" class="btn btn-primary" type="button" style="background: #04bc00;border-style: none;margin-top:10px;">Admin panel</a>
                     @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
