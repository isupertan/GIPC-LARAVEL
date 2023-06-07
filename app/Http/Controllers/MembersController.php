<?php

namespace App\Http\Controllers;

use App\Models\Members;
use App\Models\MembershipPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Members::with('plan')->get();
        // dd($members);   
        return view('backend.membership.list', compact('members'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $plans = MembershipPlan::all();
        return view('backend.membership.add',compact('plans'));
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

            'name'             => 'required|string',
            'email'            => 'required|email|unique:users'
        ]);


        if ($request->hasFile('file')) {

            $request->validate([
                'file' => 'mimes:jpeg,bmp,png,webp' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('members', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $Members                   =     new Members;
            $Members->name             =     $request->name;
            $Members->email            =     $request->email;
            $Members->organisation     =     $request->organisation;
            $Members->designation      =     $request->designation;
            $Members->mobile           =     $request->mobile;
            $Members->phone            =     $request->phone;
            $Members->membershipplan   =     $request->membershipplan;
            $Members->city             =     $request->city;
            $Members->country          =     $request->country;
            $Members->image_name       =     $request->file->hashName();
            $Members->password         =     Hash::make( $request->password );

            $Members->save(); // Finally, save the record.
        }

        return redirect()->route('admin.membership')->with('success','Member has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Members  $members
     * @return \Illuminate\Http\Response
     */
    public function show(Members $members)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Members  $members
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = Members::with('plan')->find($id);
        $plans = MembershipPlan::all();
        return view('backend.membership.edit', compact('member','plans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Members  $members
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $this->validate($request, [
            'name'                     =>    'required|string',
            'email'                    =>    'required|string',
        ]);

            $Members                   =     Members::find($id);
            $Members->name             =     $request->name;
            $Members->email            =     $request->email;
            $Members->organisation     =     $request->organisation;
            $Members->designation      =     $request->designation;
            $Members->mobile           =     $request->mobile;
            $Members->phone            =     $request->phone;
            $Members->membershipplan   =     $request->membershipplan;
            $Members->city             =     $request->city;
            $Members->country          =     $request->country;
            $Members->password         =     Hash::make( $request->password );
            
        if($request->file("file")) {
            $big_file = $request->file('file');
            $request->file->store('members', 'public');
            $Members->image_name = $big_file->hashName();
        } 
        // backend.membership.planlist
        $Members->save(); // Finally, save the record.
        return redirect()->route('admin.membership')->with('success','Member has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Members  $members
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Members::find($id);
        @unlink(public_path('storage/members/'.$member->image_name));
        $member->delete();

        // return redirect()->route('admin.npost')->with('success','Service has been deleted');
        return redirect()->back()->with('success','Member has been deleted');
    }
}
