<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function machines()
    {
        return view('frontend.machines.index');
    }

    public function services()
    {
        return view('frontend.services.index');
    }

}
