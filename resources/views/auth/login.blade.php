@extends('layouts.app')

@section('content')

<div class="container-fluid">
        <div class="row no-gutter">
          <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
          <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
              <div class="container">
                <div class="row">
                  <div class="col-md-9 col-lg-8 mx-auto">
                    <h3 class="login-heading mb-4">Welcome back!</h3>
                    <form method="POST" action="{{ route('login') }}">
                       @csrf

                      <div class="form-label-group">
                        <input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email address" required autofocus>
                       
                        <label for="inputEmail">{{ __('E-Mail Address') }}</label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
 
                       </div>
      
                      <div class="form-label-group">
                        <input type="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" required>
                        
                        <label for="inputPassword">{{ __('Password') }}</label>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
      
                      <div class="custom-control custom-checkbox mb-3">
                        <input class="form-check-input" type="checkbox" name="remember" id="customCheck1" {{ old('remember') ? 'checked' : '' }}>
                       
                        <label class="custom-control-label" for="customCheck1">{{ __('Remember Me') }}</label>
                      </div>
                      <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">{{ __('Login') }}</button>
                      <div class="text-center">
                            @if (Route::has('password.request'))
                               <a class="small" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a></div>    
                            @endif
                      </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>









      @endsection