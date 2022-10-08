<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use Illuminate\Http\Request;

class MachineController extends Controller
{

    public function index()
    {

        $machines = Machine::paginate(6);

        return view('frontend.machines.index', compact('machines'));
    }

    // Backend
    public function allMachines()
    {

        $machines = Machine::paginate(6);

        return view('backend.machines.index', compact('machines'));

    }

    public function show($id)
    {
        $machine = Machine::where('id', $id)->first();

        return view('frontend.machines.detail', compact('machine'));
    }

    public function create()
    {
        return view('backend.machines.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'thumbnail' => 'required|image|mimes:png,jpg'
        ]);

        $filename = time() . '.' . $request->thumbnail->extension();

        $request->thumbnail->move(public_path('assets/frontend/img/machines/upload'), $filename);

        Machine::create([
            'name' => $request->name,
            'description' => $request->description,
            'thumbnail' => 'assets/frontend/img/machines/upload/' . $filename
        ]);

        return redirect()->back();
    }
}
