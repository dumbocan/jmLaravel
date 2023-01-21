<?php

namespace App\Http\Controllers;

class customersController extends Controller
{
    public function index()
    {
        return view('customers.index');
    }
}
