<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lecturers;

class LecturersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lecturers = lecturers::where('is_active', true)->get();
        return view("lecturers.index", compact("lecturers"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lecturers = lecturers::all();
        return view("Lecturers.create", compact("lecturers"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $lecturers = lecturers::create($request->all());
        return redirect()->route("Lecturers.index")->with("success","Lecturers Create successfulye");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $lecturers = lecturers::find($id);
        return view("Lecturers.show", compact("lecturers"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $lecturers = lecturers::all();
        return view("Lecturers.edit", compact("lecturers"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $lecturers = lecturers::find($id);
        $lecturers->update($request->all());
        return redirect()->route("Lecturers.index")->with("success","Updeated success");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lecturers = lecturers::find($id);
        $lecturers->delete();
    }
}
