<?php

namespace App\Http\Controllers;

use App\Models\Special;
use Illuminate\Http\Request;

class SpecialController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Special;
        $data->description = $request->description;
        $data->icon = $request->icon;
        $data->save();

        toast('Special successfully added','success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Special $special)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Special $special)
    {
        return view('landing', compact('special'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Special $special)
    {
        $data = Special::find($special->id);
        $data->description = $request->description;
        $data->icon = $request->icon;
        $data->update();

        toast('Special has been updated!','success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Special $special)
    {
        //
    }
}
