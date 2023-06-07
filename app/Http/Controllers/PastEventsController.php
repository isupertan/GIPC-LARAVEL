<?php

namespace App\Http\Controllers;

use App\Models\PastEvents;
use App\Models\PastEventGallery;
use Illuminate\Http\Request;

class PastEventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = PastEvents::all();
        return view('backend.pastevent.list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pastevent.add');
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
                'file' => 'mimes:jpeg,bmp,png,webp' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('pastevents', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $categories                       =     new PastEvents;
            $categories->title                =     $request->title;
            $categories->slug                 =     str_slug($request->title);
            $categories->image_name           =     $request->file->hashName();
            $categories->image_alt            =     $request->img_alt;
            $categories->description          =     $request->description;
            $categories->meta_title           =     $request->meta_title;
            $categories->meta_description     =     $request->meta_description;
            $categories->year                 =     $request->year;

            $categories->save(); // Finally, save the record.
        }

        $categories->id;

        $galleryImages = [];

        if($request->hasfile('Galleryimage'))
         {
            foreach($request->file('Galleryimage') as $img)
            {
                $name = $img->hashName();
                $img->store('pasteventsgallery', 'public');
                $galleryImages[] = $name;  
                PastEventGallery::create([
                    'pasteventid' => $categories->id,
                    'image_name' => $name,
                ]);
            }
         }
        return redirect()->route('admin.pastevent')->with('success','Past Event has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PastEvents  $pastEvents
     * @return \Illuminate\Http\Response
     */
    public function show(PastEvents $pastEvents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PastEvents  $pastEvents
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category =   PastEvents::find($id);
        $gallery  =   PastEventGallery::where('pasteventid', $id)->get();
        return view('backend.pastevent.edit', compact('category','gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PastEvents  $pastEvents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $this->validate($request, [
            'title'             => 'required|string',
        ]);

            $categories                   =     PastEvents::find($id);
            $categories->title            =     $request->title;
            $categories->image_alt        =     $request->img_alt;
            $categories->description      =     $request->description;
            $categories->meta_title       =     $request->meta_title;
            $categories->meta_description =     $request->meta_description;
            $categories->year             =     $request->year;
            
        if($request->file("file")) {
            $big_file = $request->file('file');
            $request->file->store('pastevents', 'public');
            $categories->image_name = $big_file->hashName();
        } 

        $categories->save(); // Finally, save the record.

        $categories->id;
        $galleryImages = [];

        if($request->hasfile('Galleryimage'))
         {
            foreach($request->file('Galleryimage') as $img)
            {
                $name = $img->hashName();
                $img->store('pasteventsgallery', 'public');
                $galleryImages[] = $name;  
                PastEventGallery::create([
                    'pasteventid' =>  $categories->id,
                    'image_name'  => $name,
                ]);
            }
        }


        return redirect()->route('admin.pastevent')->with('success','Event has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PastEvents  $pastEvents
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories = PastEvents::find($id);
        @unlink(public_path('storage/pastevents/'.$categories->image_name));
        $categories->delete();
        return redirect()->back()->with('success','Past Event has been deleted');
    }


    // Delete the gallery image
    public function destroygallery($id)
    {
        $ProductImage = PastEventGallery::find($id);
        @unlink(public_path('storage/pasteventsgallery/'.$ProductImage->image_name));
        $ProductImage->delete();

        return redirect()->back()->with('success','Event Gallery Image has been deleted');
    }
}
