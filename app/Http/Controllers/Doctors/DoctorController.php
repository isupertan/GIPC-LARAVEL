<?php

namespace App\Http\Controllers\Doctors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor\DoctorList;
use App\Models\Doctor\DoctorCategory;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categories = Categories::all();
        $doctors   = DoctorList::with('category')->get();
        // dd($doctors);
        // return $doctors['categories']['title'];
        return view('backend.doctor.doctorlist.list', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DoctorCategory::all();
        return view('backend.doctor.doctorlist.add',compact('categories'));
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
            'img_alt'           => 'required|string',
            'meta_title'        => 'required|string',
            'img_alt'           => 'required|string',
        ]);

        if ($request->hasFile('file')) {

            $request->validate([
                'file' => 'mimes:jpeg,bmp,png,webp' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('doctorlist', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $doctors                         =     new DoctorList;
            $doctors->title                  =     $request->title;
            $doctors->slug                   =     str_slug($request->title);
            $doctors->image_name             =     $request->file->hashName();
            $doctors->image_alt              =     $request->img_alt;
            $doctors->description            =     $request->description;
            $doctors->price                  =     $request->price;
            $doctors->category_id            =     $request->category;
            $doctors->priority               =     $request->priority;
            $doctors->meta_title             =     $request->meta_title;
            $doctors->meta_description       =     $request->meta_description;
            $doctors->doctor_qualification   =     $request->doctor_qualification;
            $doctors->doctor_timings         =     $request->doctor_timings;

            $doctors->save(); // Finally, save the record.
        }

        return redirect()->route('admin.doctor')->with('success','Doctor has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor = DoctorList::find($id);
        return view('apollo.doctor-detail',compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor     =   DoctorList::with('category')->where('id', $id)->first();
        $categories =   DoctorCategory::all();
        return view('backend.doctor.doctorlist.edit', compact('doctor','categories'));
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
        $this->validate($request, [
            'title'             => 'required|string',
            'img_alt'           => 'required|string',
            'meta_title'        => 'required|string',
            'img_alt'           => 'required|string',
        ]);

        $doctors                           =     DoctorList::find($id);
        $doctors->title                    =     $request->title;
        $doctors->slug                     =     str_slug($request->title);
        $doctors->image_alt                =     $request->img_alt;
        $doctors->description              =     $request->description;
        $doctors->price                    =     $request->price;
        $doctors->category_id              =     $request->category;
        $doctors->priority                 =     $request->priority;
        $doctors->meta_title               =     $request->meta_title;
        $doctors->meta_description         =     $request->meta_description;
        $doctors->doctor_qualification     =     $request->doctor_qualification;
        $doctors->doctor_timings           =     $request->doctor_timings;
        

        if($request->file("file")) {
            $big_file = $request->file('file');
            $request->file->store('doctorlist', 'public');
            $doctors->image_name = $big_file->hashName();
        } 

        $doctors->save(); // Finally, update the record.
        return redirect()->route('admin.doctor')->with('success','Doctor Has Been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctors = DoctorList::find($id);
        @unlink(public_path('storage/doctorlist/'.$doctors->image_name));
        $doctors->delete();

        // return redirect()->route('admin.npost')->with('success','Service has been deleted');
        return redirect()->back()->with('success','Doctor has been deleted');
    }
}
