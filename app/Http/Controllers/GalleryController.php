<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Gallery::all();
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
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg',
        ]);

        $data = new Gallery;
        $data->category = $request->category;
        $data->title = $request->title;

        $img = $request->file('image');
        $img_file = time()."_".$img->getClientOriginalName();
        $dir_img = 'img';
        $img->move($dir_img,$img_file);
        $data->image = $img_file;
        $data->save();

        toast('Header successfully added','success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        return view('landing', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        if ($request->status != null) {
            $status = 'show';
        } else {
            $status = 'hide';
        }

        $data = Gallery::find($gallery->id);
        $data->category = $request->category;
        $data->title = $request->title;
        $data->status = $status;

        if ($request->hasFile('image')) {
            if ($data->image != '' && $data->image != 'gallery.jpg') {
                $img_prev = $request->img_prev;
                unlink('img/'.$img_prev);
            }
            $img = $request->file('image');
            $img_file = time()."_".$img->getClientOriginalName();
            $dir_img = 'img';
            $img->move($dir_img,$img_file);
    
            $data->image = $img_file;
        }
        $data->update();
        toast('Gallery has been updated!','success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
}
