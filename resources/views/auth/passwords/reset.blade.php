
@extends('layouts.front')

@section('content')

@section('style')
    <style>
        body{
            background: #fbfbfb;
        }
        .form-control{
            height: calc(2em + .75rem + 2px) !important;
        }

        .social_icon span{
            font-size: 60px;
            margin-left: 10px;
        }

        .social_icon span:hover{
            color: white;
            cursor: pointer;
        }
        .card-header h3{
            font-weight: bold;
            font-style: 25px;
        }
        .card{
            border-radius: 1rem;
        }


        .input-group-text{
            width: 50px;

        }

        .input-group-text i{
            margin-left: auto;
            margin-right: auto;
            font-weight: bold;

        }

        .inputdiv {

        }



    </style>
@endsection
@section('content')
@php

    $setting = \App\Model\Setting::first();
@endphp

    <div class="inner_page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header d-flex ">
                            <h3 class="mr-auto mt-auto mb-auto">
                                {{ __('Reset Password') }}</h3>
                            <div class="justify-content-end social_icon ml-auto text-success inputdiv">
                                <span><a href="{{$setting->fb_link}}"><i class="fa fa-facebook-square" style="color: red;"></i></a></span>
                                <!--<span><a href="https://myaccount.google.com/profile"><i class="fa fa-google-plus-square"  style="color: red;"></i></a></span>-->
                                <span><a href="{{$setting->tweeet_link}}"><i class="fa fa-twitter-square"  style="color: red;"></i></a></span>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" class="p-4" action="{{ route('password.update') }}">
                                @csrf

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="form-group row">
                                    <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>

                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                </div>

                                <div class="form-group row mb-0">

                                    <button type="submit" class="button">
                                        {{ __('Reset Password') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
