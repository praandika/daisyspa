<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Special;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = About::all();
        $special = Special::all();
        return view('landing', compact('data','special'));
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
        $data = new About;
        $data->video = $request->video;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->text1 = $request->text1;
        $data->text2 = $request->text2;
        $data->save();

        toast('About successfully added','success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('landing', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        $data = About::find($about->id);
        $data->video = $request->video;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->text1 = $request->text1;
        $data->text2 = $request->text2;
        $data->update();

        toast('About has been updated!','success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        //
    }
}
