<?php

namespace App\Http\Controllers;

use App\Models\SparePart;
use Illuminate\Http\Request;
use Alert;

class SparePartsController extends Controller
{

    //Frontend
    public function index()
    {
        $spareparts = SparePart::paginate(10);

        return view('frontend.spareparts.index' , compact('spareparts'));
    }

    //Backend

    public function allSpareParts()
    {
        $spareparts = SparePart::paginate(10);

        return view('backend.spareparts.index', compact('spareparts'));
    }

    public function create()
    {
        return view('backend.spareparts.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'thumbnail' => 'required|image|mimes:png,jpg',
            'description' => 'required'
        ]);

        $filename = time() . '.' . $request->thumbnail->extension();

        $request->thumbnail->move(public_path('assets/frontend/img/machines/upload/spareparts/'), $filename);

        $sparepart = SparePart::create([
            'name' => $request->name,
            'thumbnail' => 'assets/frontend/img/machines/upload/spareparts/' . $filename,
            'description' => $request->description
        ]);

        Alert::success("Spare Part Added Successfully!!", "New spare part added in the system.");

        return redirect()->back();

    }

}
