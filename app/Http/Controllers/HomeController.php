<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Machine;
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

    public function services()
    {

        $categories = Category::all();

        return view('frontend.services.index', compact('categories'));
    }

    public function sealing()
    {
        $machines = Machine::where('category_id', 1)->paginate(10);
        // dd($machines);

        return view('frontend.services.sealing', compact('machines'));
    }

    public function packaging()
    {
        $machines = Machine::where('category_id', 2)->paginate(10);
        // dd($machines);

        return view('frontend.services.packaging', compact('machines'));
    }

    public function filling()
    {
        $machines = Machine::where('category_id', 3)->paginate(10);
        // dd($machines);

        return view('frontend.services.filling', compact('machines'));
    }

    public function badgePrinters()
    {
        $machines = Machine::where('category_id', 4)->paginate(10);
        // dd($machines);

        return view('frontend.services.badgeprinters', compact('machines'));
    }

    public function terms()
    {
        return view('frontend.termsconditions.terms');
    }

    public function privacy()
    {
        return view('frontend.termsconditions.privacy');
    }

}
