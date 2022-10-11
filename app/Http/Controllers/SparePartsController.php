<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SparePartsController extends Controller
{

    public function index()
    {
        return view('frontend.spareparts.index');
    }

    public function create()
    {
        return view('frontend.spareparts.create');
    }

}
