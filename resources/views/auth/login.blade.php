@extends('layouts.app')

@section('content')
 <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body">

                            <div class="p-3">
                                <h4 class="font-size-18 text-muted mt-2 text-center">Welcome Back !</h4>
                                <!-- <p class="text-muted text-center mb-4">Sign in to continue to Fonik.</p> -->

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="mb-3">
                                        <label class="form-label " for="email" >{{ __('Email Address') }}</label>
                                        <input id="email" type="email" class="form-control @error( 'email') is-invalid @enderror" name="email" value="{{ old( 'email') }}" required autocomplete="email" autofocus placeholder="Enter Email Address ">
                                        @error('email')
                                        <span class="invalid-feedback " role="alert ">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>

                                    <div class="mb-3 ">
                                        <label class="form-label " for="password ">{{ __('Password') }}</label>
                                        <input id="password" type="password" class="form-control @error( 'password') is-invalid @enderror " name="password" required autocomplete="current-password" placeholder="Enter password ">
                                        @error('password')
                                        <span class="invalid-feedback " role="alert ">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>

                                    <div class="mb-3 row mt-4 ">
                                        <div class="col-sm-6 ">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" class="form-check-input me-1" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-label" class="form-check-label" for="remember"> {{ __('Remember Me') }}</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-end ">
                                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                        </div>
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
