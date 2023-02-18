@extends('layouts.app')

@section('content')

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<form method="POST" action="{{ route('password.email') }}">
    @csrf
    <label class="text-sm text-center pt-3 pr-4">{{ __('Reset Password') }}</label>
    <div class="container mx-auto sm:w-1/2 text-sm pt-3 mb-9 w-2/3">
        <input id="email" type="email" class=" form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('Email Address') }}">
        @error('email')
            <span class="is-invalid" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <button type="submit" class="btn btn-blue btn-blue:hover mb-4">
        {{ __('Send Password Reset Link') }}
    </button>

</form>


@endsection
