<?php

namespace App\Http\Controllers;

use App\Models\MembershipPlan;
use Illuminate\Http\Request;

class MembershipPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans = MembershipPlan::all();
        return view('backend.membership.planlist', compact('plans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.membership.planadd');
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

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('memebershipplan', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $categories                   =     new MembershipPlan;
            $categories->title            =     $request->title;
            $categories->slug             =     str_slug($request->title);
            $categories->price            =     $request->price;
            $categories->image_name       =     $request->file->hashName();
            $categories->image_alt        =     $request->img_alt;
            $categories->description      =     $request->description;
            $categories->meta_title       =     $request->meta_title;
            $categories->meta_description =     $request->meta_description;

            $categories->save(); // Finally, save the record.
        }

        return redirect()->route('admin.membership.planlist')->with('success','Membership Plan has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MembershipPlan  $membershipPlan
     * @return \Illuminate\Http\Response
     */
    public function show(MembershipPlan $membershipPlan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MembershipPlan  $membershipPlan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plan = MembershipPlan::find($id);
        return view('backend.membership.planedit', compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MembershipPlan  $membershipPlan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $this->validate($request, [
            'title'             => 'required|string',
        ]);

            $categories                      =     MembershipPlan::find($id);
            $categories->title               =     $request->title;
            $categories->price               =     $request->price;
            $categories->image_alt           =     $request->img_alt;
            $categories->description         =     $request->description;
            $categories->meta_title          =     $request->meta_title;
            $categories->meta_description    =     $request->meta_description;
            
        if($request->file("file")) {
            $big_file = $request->file('file');
            $request->file->store('memebershipplan', 'public');
            $categories->image_name = $big_file->hashName();
        } 
        // backend.membership.planlist
        $categories->save(); // Finally, save the record.
        return redirect()->route('admin.membership.planlist')->with('success','Membership Plan has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MembershipPlan  $membershipPlan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plans = MembershipPlan::find($id);
        @unlink(public_path('storage/memebershipplan/'.$plans->image_name));
        $plans->delete();

        // return redirect()->route('admin.npost')->with('success','Service has been deleted');
        return redirect()->back()->with('success','Memebership Plan has been deleted');
    }
}
