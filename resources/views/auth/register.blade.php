@extends('layouts.app')

@section('content')
<div class="account-pages my-5 pt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card">
                    <div class="card-body">
                       
                        <div class="p-3">
                            <h4 class="font-size-18 text-muted mt-2 text-center"> Register</h4>

                            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="name"  class="form-label">{{ __('Name') }}</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="mobile" class="form-label">{{ __('Mobile') }}</label>
                                    <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile"  required autocomplete="mobile">
                                    @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="birthdate" class="form-label">{{ __('Birthdate') }}</label>
                                    <input id="birthdate" type="Date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ old('birthdate') }}"   autocomplete="birthdate">
                                    @error('birthdate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="image" class="form-label">{{ __('Image') }}</label>
                                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image"  required autocomplete="image">
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                                
                                <div class="row mb-3" style="display: none">
                                    <label for="slug" class="col-md-4 col-form-label text-md-end">{{ __('slug') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="slug" type="text" class="form-control" name="affiliate"  value="{{$slug}}">
        
                                       
                                    </div>
                                </div>
                                <div class="mb-3 row mt-4">
                                    <div class="col-12 text-end">
                                        <button class="btn btn-primary w-md waves-effect waves-light"
                                            type="submit">{{ __('Register') }}</button>
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
