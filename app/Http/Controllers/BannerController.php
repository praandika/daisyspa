<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Banner::where('status','show')->get();
        $count = count($data);
        return view('landing', compact('data', 'count'));
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

        $data = new Banner;
        $data->alt = $request->alt;
        $data->title = $request->title;
        $data->subtitle = $request->subtitle;
        $data->description = $request->description;
        $data->link = $request->link;
        $img = $request->file('image');
        $img_file = time()."_".$img->getClientOriginalName();
        $dir_img = 'img';
        $img->move($dir_img,$img_file);
        $data->image = $img_file;
        $data->save();
        
        toast('Banner successfully added','success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        return view('landing', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        if ($request->status != null) {
            $status = 'show';
        } else {
            $status = 'hide';
        }

        $data = Banner::find($banner->id);
        $data->alt = $request->alt;
        $data->title = $request->title;
        $data->subtitle = $request->subtitle;
        $data->description = $request->description;
        $data->link = $request->link;
        $data->status = $status;
        if ($request->hasFile('image')) {
            if ($data->image != '' && $data->image != 'banner.jpg') {
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
        toast('Banner has been updated!','success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        //
    }
}
