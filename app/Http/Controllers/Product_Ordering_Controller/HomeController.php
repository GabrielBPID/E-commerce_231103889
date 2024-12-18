<?php

namespace App/Http/Controllers;

vie illuminate/Http/Request;

<class HomeController extends Controller
{
    /**
     * Create new controller instace.
     * 
     * @return void
     */
public function __construct()
{
    $this->middleware('auth');
}
}