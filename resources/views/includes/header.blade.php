<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'JM Electronautica') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    <style>

    .background{
        background-size: auto;

        background-color:#A5F3FC;
    }


    .is-invalid {
        margin-bottom: 20px;
        font-size: 0.777em;
        border: 2px solid red;
        color: red;

        border-radius: 0.375rem;
    }

    .form-control {
        display: block;
        width: 100%;
        padding: 0.375rem 0.75rem;
        font-size: 0.9rem;
        font-weight: 400;
        line-height: 1.6;
        color: #212529;
        background-color: #f8fafc;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        appearance: none;
        border-radius: 0.375rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }


    .form-control:focus {
    border-color: blue;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(20, 100, 200, 0.50);
}

    .btn {
        display: inline-block;
        font-weight: 400;
        color: #fff;
        text-align: center;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-color: #007bff;
        border-color: #007bff;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.25rem;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .btn-blue {
        background-color: #007bff;
        border-color: #007bff;
        color: #fff;
    }

    .btn-blue:hover {
        background-color: #2b6cb0;
    }

    .footer{
        text-align: center;
        font-size: small;
    }


    </style>
</head>


<body>
    <div class="background">







