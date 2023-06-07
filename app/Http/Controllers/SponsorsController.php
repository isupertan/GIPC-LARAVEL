<?php

namespace App\Http\Controllers;

use App\Models\Sponsors;
use Illuminate\Http\Request;

class SponsorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Sponsors::all();
        return view('backend.sponsor.list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.sponsor.add');
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

            'title'             => 'required|string',
        ]);

        if ($request->parent_id == "") {
            $parent_id = 0;
        } else {
            $parent_id = $request->parent_id;
        }


        if ($request->hasFile('file')) {

            $request->validate([
                'file' => 'mimes:jpeg,bmp,png,webp,gif' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('sponsors', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $categories                     =     new Sponsors;
            $categories->title              =     $request->title;
            $categories->slug               =     str_slug($request->title);
            $categories->image_name         =     $request->file->hashName();
            $categories->image_alt          =     $request->img_alt;
            $categories->description        =     $request->description;
            $categories->meta_title         =     $request->meta_title;
            $categories->meta_description   =     $request->meta_description;

            $categories->save(); // Finally, save the record.
        }

        return redirect()->route('admin.sponsor')->with('success','Sponsor has been added');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sponsors  $sponsors
     * @return \Illuminate\Http\Response
     */
    public function show(Sponsors $sponsors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sponsors  $sponsors
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Sponsors::find($id);
        return view('backend.sponsor.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sponsors  $sponsors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $this->validate($request, [
            'title'             => 'required|string',
        ]);

            $categories                     =     Sponsors::find($id);
            $categories->title              =     $request->title;
            $categories->image_alt          =     $request->img_alt;
            $categories->description        =     $request->description;
            $categories->meta_title         =     $request->meta_title;
            $categories->meta_description   =     $request->meta_description;
            
        if($request->file("file")) {
            $big_file = $request->file('file');
            $request->file->store('sponsors', 'public');
            $categories->image_name = $big_file->hashName();
        } 

        $categories->save(); // Finally, save the record.
        return redirect()->route('admin.sponsor')->with('success','Sponsor has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sponsors  $sponsors
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories = Sponsors::find($id);
        @unlink(public_path('storage/sponsors/'.$categories->image_name));
        $categories->delete();

        // return redirect()->route('admin.npost')->with('success','Service has been deleted');
        return redirect()->back()->with('success','Sponsor has been deleted');
    }
}
