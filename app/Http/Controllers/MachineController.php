<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $categories = Category::all();

        return view('backend.machines.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'thumbnail' => 'required|image|mimes:png,jpg',
            'category' => 'required',
        ]);

        $filename = time() . '.' . $request->thumbnail->extension();

        $request->thumbnail->move(public_path('assets/frontend/img/machines/upload'), $filename);

        Machine::create([
            'name' => $request->name,
            'description' => $request->description,
            'thumbnail' => 'assets/frontend/img/machines/upload/' . $filename,
            'category_id' => $request->category
        ]);

        return redirect()->back();
    }

    public function edit($id)
    {
        $categories = Category::all();

        $machine = Machine::where('id', $id)->first();

        return view('backend.machines.edit', compact('machine', 'categories'));
    }

    public function update($id, Request $request)
    {
        // dd($request->hasFile('thumbnail'));

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'thumbnail' => 'nullable|image|mimes:png,jpg',
            'category' => 'required',
        ]);

        $machine = Machine::where('id', $id)->first();

        if ($request->hasFile('thumbnail') == true) {

            $filename = time() . '.' . $request->thumbnail->extension();

            $request->thumbnail->move(public_path('assets/frontend/img/machines/upload/machines/'), $filename);

            $machine->name = $request->name;
            $machine->description = $request->description;
            $machine->thumbnail = 'assets/frontend/img/machines/upload/machines/' . $filename;
            $machine->category_id = $request->category;

            $machine->save();

        }
        else{
            $machine->name = $request->name;
            $machine->description = $request->description;
            $machine->category_id = $request->category;

            $machine->save();
        }

        return redirect()->back();
    }

    public function destroy($id)
    {

        $machine = Machine::where('id', $id)->first();

        $machine->delete();

        return redirect()->back();

    }

    public function trash()
    {

        $machines = Machine::onlyTrashed()->paginate(6);

        return view('backend.machines.trash', compact('machines'));
    }

    public function restoreTrash($id)
    {
        $machine = Machine::where('id', $id)->restore();

        return redirect()->back();

    }

    public function forceDelete($id)
    {
        $machine = Machine::where('id', $id)->forceDelete();

        return redirect()->back();

    }

}
