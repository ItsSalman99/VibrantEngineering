<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $machines = Machine::count();

        return view('backend.index', compact('machines'));
    }
}
