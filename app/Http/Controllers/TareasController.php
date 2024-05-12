<?php

namespace App\Http\Controllers;

use App\Models\tareas;
use App\Http\Requests\StoretareasRequest;
use App\Http\Requests\UpdatetareasRequest;

class TareasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('tareas.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoretareasRequest $request)
    {
        //
    }
    public function save(Request $request)
    {   
        $validation = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'price' => 'required',
        ]);
        $data = Product::create($validation);
        if ($data) {
            session()->flash('success', 'Product Add Succesfully');
            return redirect(route('admin/products'));
        } else{
            session()->flash('error', 'Some problem occure');
            return redirect(route('admin.products/create'));
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(tareas $tareas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tareas $tareas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetareasRequest $request, tareas $tareas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tareas $tareas)
    {
        //
    }
}
