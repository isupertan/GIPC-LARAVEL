<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('backend.testimonial.list', compact('testimonials'));
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.testimonial.add');
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
            $request->file->store('testimonial', 'public');

            // video_link
            // image_alt
            // feedback
           
          // Store the record, using the new file hashname which will be it's new filename identity.
            $Testimonial                     =     new Testimonial;
            $Testimonial->title              =     $request->title;
            $Testimonial->designation        =     $request->designation;
            $Testimonial->company            =     $request->company;
            $Testimonial->image_name         =     $request->file->hashName();
            $Testimonial->image_alt          =     $request->image_alt;
            $Testimonial->video_link         =     $request->video_link;
            $Testimonial->feedback           =     $request->feedback;

            $Testimonial->save(); // Finally, save the record.
        }

        return redirect()->route('admin.testimonial')->with('success','Testimonial has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        return view('backend.testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $this->validate($request, [
            'title'             => 'required|string',
        ]);

            $Testimonial                     =     Testimonial::find($id);
            $Testimonial->title              =     $request->title;
            $Testimonial->designation        =     $request->designation;
            $Testimonial->company            =     $request->company;
            $Testimonial->image_alt          =     $request->img_alt;
            $Testimonial->video_link         =     $request->video_link;
            $Testimonial->feedback           =     $request->feedback;
            
        if($request->file("file")) {
            $big_file = $request->file('file');
            $request->file->store('testimonial', 'public');
            $Testimonial->image_name = $big_file->hashName();
        } 

        $Testimonial->save(); // Finally, save the record.
        return redirect()->route('admin.testimonial')->with('success','Testimonial has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Testimonial = Testimonial::find($id);
        @unlink(public_path('storage/testimonial/'.$Testimonial->image_name));
        $Testimonial->delete();

        // return redirect()->route('admin.npost')->with('success','Service has been deleted');
        return redirect()->back()->with('success','Testimonial has been deleted');
    }
}
