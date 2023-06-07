<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Setting;

// 'image_name',
//         'title',
//         'facebook',
//         'twitter',
//         'linkedin',
//         'email',
//         'whatsapp',
//         'footer_description_one',
//         'footer_description_two',
//         'footer_description_three',


class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::where('id' , 1)->first();

        return view('backend.setting.sitesetting', compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        if ($request->hasFile('file')) {

            $request->validate([
                'file' => 'mimes:jpeg,bmp,png,webp' // Only allow .jpg, .bmp and .png file types.
            ]);

            $request->file->store('site', 'public');

            $Setting                              =     new Setting;
            $Setting->title                       =     $request->title;                  
            $Setting->image_name                  =     $request->file->hashName();            
            $Setting->facebook                    =     $request->facebook;              
            $Setting->twitter                     =     $request->twitter;                
            $Setting->linkedin                    =     $request->linkedin;              
            $Setting->email                       =     $request->email;                  
            $Setting->whatsapp                    =     $request->whatsapp;                
            $Setting->footer_description_one      =     $request->footer_description_one; 
            $Setting->footer_description_two      =     $request->footer_description_two; 
            $Setting->footer_description_three    =     $request->footer_description_three;  
            $Setting->save(); // Finally, save the record.
        }

        return redirect()->route('admin.product')->with('success','Settings has been Saved');
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

        $this->validate($request, [
            'title'             => 'required|string',
        ]);

        $Setting                              =     Setting::find($id);
        $Setting->title                       =     $request->title;                  
        $Setting->facebook                    =     $request->facebook;              
        $Setting->twitter                     =     $request->twitter;                
        $Setting->linkedin                    =     $request->linkedin;              
        $Setting->email                       =     $request->email;                  
        $Setting->whatsapp                    =     $request->whatsapp;                
        $Setting->footer_description_one      =     $request->footer_description_one; 
        $Setting->footer_description_two      =     $request->footer_description_two; 
        $Setting->footer_description_three    =     $request->footer_description_three; 
        

        if($request->file("file")) {
            $big_file = $request->file('file');
            $request->file->store('site', 'public');
            $Setting->image_name                  =     $big_file->hashName();  
        } 

        $Setting->save(); // Finally, update the record.
        return redirect()->back()->with('success','Site Settings Have Been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // public function sociallinks(){
    //     $setting = Setting::where('id' , 1)->first();
    //     return view('frontinc.social', compact('setting'));
    // }
}
