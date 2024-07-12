<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() {

        return view("login");
    }

    public function login(Request $request) {

        dd($request);
    }
}
