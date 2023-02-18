@extends('layouts.app')

@section('content')


<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="flex flex-col sm:flex-row mb-1">
        <label for="name" class="w-1/3 text-sm text-center pt-3 pr-4 sm:text-right">{{ __('Name') }}</label>

        <div class="w-12/10 m-2  sm:w-1/2 sm:ml-0 ">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="flex flex-col sm:flex-row mb-1">
        <label for="email" class="w-1/3 text-sm text-center pt-3 pr-4 sm:text-right">{{ __('Email Address') }}</label>

        <div class="w-12/10 m-2  sm:w-1/2 sm:ml-0 ">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="flex flex-col sm:flex-row mb-1">
        <label for="password" class="w-1/3 text-sm text-center pt-3 pr-4 sm:text-right">{{ __('Password') }}</label>

        <div class="w-12/10 m-2  sm:w-1/2 sm:ml-0 ">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="flex flex-col sm:flex-row mb-1">
        <label for="password-confirm" class="w-1/3 text-sm text-center pt-3 pr-4 sm:text-right">{{ __('Confirm Password') }}</label>

        <div class="w-12/10 m-2  sm:w-1/2 sm:ml-0 ">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
    </div>


    <div class="mx-auto pb-6">
        <button type="submit" class="btn btn-blue">
            {{ __('Register') }}
        </button>
    </div>

</form>



@endsection
