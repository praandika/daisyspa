<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pricing::where('status','show')->get();
        return view('landing', compact('data'));
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
        $data = new Pricing;
        $data->package = $request->package;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->link = $request->link;
        $data->save();

        toast('Pricing successfully added','success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Pricing $pricing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pricing $pricing)
    {
        return view('landing', compact('pricing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pricing $pricing)
    {
        $data = Pricing::find($pricing->id);
        $data->package = $request->package;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->link = $request->link;
        $data->status = $request->status;
        $data->update();

        toast('Pricing has been updated!','success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pricing $pricing)
    {
        //
    }
}
