@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col" style="margin-bottom: 34px;margin-top: 34px;">
            <div class="container-fluid" style="background: #d9d9d9;width: 520px;margin-top: 0px;">
                <div class="row" style="background: #e6e6e6;padding-top: 60px;padding-bottom: 60px;border-color: #05ff00;">
                    <div class="col d-xl-flex justify-content-center" style="padding-right: 0px;padding-left: 0px;margin-left: 0px;">
                        <div class="card align-items-center" style="height: auto;width: 416px;">
                            <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                            @csrf
                                <div class="col">
                                    <h4 style="font-size: 29px;margin-top: 10px;margin-bottom: 10px;color: #04bc00;">Register<br></h4>
                                    <!-- <h6 class="text-muted mb-2" style="font-size: 23px;margin-top: 10px;margin-bottom: 10px;">Username<br><input type="text"></h6> -->           
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- <h6 class="text-muted mb-2" style="font-size: 23px;margin-top: 10px;margin-bottom: 10px;">Password<br><input type="password"></h6> -->
                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- <h6 class="text-muted mb-2" style="font-size: 23px;margin-top: 10px;margin-bottom: 10px;">Repeat Password<br><input type="password"> -->
                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                                    <!-- Email address -->
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <!-- </h6><button class="btn btn-primary" type="button" style="background: #04bc00;">Register</button></div> -->
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary" style="background: #04bc00;">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection