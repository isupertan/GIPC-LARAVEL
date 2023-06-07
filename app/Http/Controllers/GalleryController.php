<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Images;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleris = Images::all();
        return view('backend.gallery.list', compact('galleris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.gallery.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'required',
            'file.*' => 'image'
       ]);
        
        $galleryImages = [];

        if($request->hasfile('file'))
         {
            foreach($request->file('file') as $img)
            {
                $name = $img->hashName();
                $img->store('gallery_img', 'public');
                $galleryImages[] = $name;  
                Images::create([
                    'image_name' => $name,
                ]);
            }
         }
  
        return back()->with('success', 'Slider images added hase been successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Images::find($id);
        @unlink(public_path('storage/gallery_img/'.$gallery->image_name));
        $gallery->delete();

        return redirect()->route('admin.gallery')->with('success','Image has been deleted');
    }
}
