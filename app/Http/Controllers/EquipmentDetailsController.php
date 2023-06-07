<?php

namespace App\Http\Controllers;

use App\Models\EquipmentDetails;
use Illuminate\Http\Request;

class EquipmentDetailsController extends Controller
{
    /**
     * Display a listing of the resource.  
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipments = EquipmentDetails::all();
        return view('backend.equipments.list', compact('equipments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.equipments.add');
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
            $request->file->store('equipment', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $equipments                  =     new EquipmentDetails;
            $equipments->title           =     $request->title;
            $equipments->image_name      =     $request->file->hashName();
            $equipments->description     =     $request->description;

            $equipments->save(); // Finally, save the record.
        }

        return redirect()->route('admin.equipments')->with('success','Equipment has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EquipmentDetails  $equipmentDetails
     * @return \Illuminate\Http\Response
     */
    public function show(EquipmentDetails $equipmentDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EquipmentDetails  $equipmentDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(EquipmentDetails $equipmentDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EquipmentDetails  $equipmentDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EquipmentDetails $equipmentDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EquipmentDetails  $equipmentDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(EquipmentDetails $equipmentDetails)
    {
        $homeslider = HomeSlider::find($id);
        @unlink(public_path('storage/homeslider/'.$homeslider->image_name));
        $homeslider->delete();

        return redirect()->route('admin.homeslider')->with('success','Slider has been deleted');
    }
}
