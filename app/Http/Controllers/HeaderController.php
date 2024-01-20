<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Header::all();
        return view('landang', compact('data'));
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
        $data = new Header;
        $data->location = $request->location;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->facebook = $request->facebook;
        $data->instagram = $request->instagram;
        $data->link = $request->link;
        $data->save();

        toast('Header successfully added','success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Header $header)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Header $header)
    {
        return view('landing', compact('header'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Header $header)
    {
        $data = Header::find($header->id);
        $data->location = $request->location;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->facebook = $request->facebook;
        $data->instagram = $request->instagram;
        $data->link = $request->link;
        $data->update();

        toast('Header has been updated!','success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Header $header)
    {
        //
    }
}
