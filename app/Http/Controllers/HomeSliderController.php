<?php

namespace App\Http\Controllers;

use App\Models\HomeSlider;
use Illuminate\Http\Request;

class HomeSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homesliders = HomeSlider::all();
        return view('backend.homeslider.list', compact('homesliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.homeslider.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('file')) {

            $request->validate([
                'file'     => 'mimes:jpeg,bmp,png,webp'
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('homeslider', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $sliderimg                  =     new HomeSlider;
            $sliderimg->title           =     $request->title;
            $sliderimg->image_name      =     $request->file->hashName();
            $sliderimg->link            =     $request->link;
            $sliderimg->status          =     $request->status;

            $sliderimg->save(); // Finally, save the record.
        }

        return redirect()->route('admin.homeslider')->with('success','Slider has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeSlider  $homeSlider
     * @return \Illuminate\Http\Response
     */
    public function show(HomeSlider $homeSlider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeSlider  $homeSlider
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeSlider $homeSlider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeSlider  $homeSlider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeSlider $homeSlider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeSlider  $homeSlider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $homeslider = HomeSlider::find($id);
        @unlink(public_path('storage/homeslider/'.$homeslider->image_name));
        $homeslider->delete();

        return redirect()->route('admin.homeslider')->with('success','Slider has been deleted');
    }
}
