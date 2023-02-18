@extends('layouts.app')


@section('content')

                   
            <form method="POST" action="{{ route('login') }}">
            @csrf
                <div class="flex flex-col sm:flex-row mb-3" type="text" placeholder="Username or Email id">
                    <label class="w-1/3 text-sm text-center pt-3 pr-4 sm:text-right" for="email" type="text" placeholder="email">{{ __('Email Address') }}</label>
                    <div class="w-12/10 m-2  sm:w-1/2 sm:ml-0 ">
                        <input id="email" type="email"   class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @if ($errors->has('email'))
                                <span class="is-invalid">{{ $errors->first('email') }}</span>
                            @endif
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row mb-3">
                    <label for="password" class="w-1/3 text-sm text-center pt-3 pr-4 sm:text-right">{{ __('Password') }}</label>
                    <div class="w-12/10 m-2  sm:w-1/2 sm:ml-0">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                </div>

                <div class="flex mb-3">
                    <div class="w-full md:w-1/2 md:mx-auto">
                        <div class="form-checkbox">
                            <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row ">
                    <div class=" mx-auto">
                        <button type="submit" class="btn btn-blue">
                            {{ __('Login') }}
                        </button>
                        <a class="btn btn-blue ml-7" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @if (Route::has('password.request'))
                            <a class="flex flex-col sm:flex-row mb-3 m-4" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
  
@endsection
