<?php

namespace App\Http\Controllers;

use App\Models\OngoingOffers;
use Illuminate\Http\Request;

class OngoingOffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ongoingoffers = OngoingOffers::all();
        return view('backend.ongoingoffer.list', compact('ongoingoffers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.ongoingoffer.add');
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
            $request->file->store('ongoingoffer', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $ongoingoffer                  =     new OngoingOffers;
            $ongoingoffer->title           =     $request->title;
            $ongoingoffer->image_name      =     $request->file->hashName();
            $ongoingoffer->link            =     $request->link;
            $ongoingoffer->description     =     $request->description;
            $ongoingoffer->status          =     $request->status;

            $ongoingoffer->save(); // Finally, save the record.
        }

        return redirect()->route('admin.ongoingoffer')->with('success','Offer has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OngoingOffers  $ongoingOffers
     * @return \Illuminate\Http\Response
     */
    public function show(OngoingOffers $ongoingOffers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OngoingOffers  $ongoingOffers
     * @return \Illuminate\Http\Response
     */
    public function  edit($id)
    {
        $ongoingoffer =   OngoingOffers::where('id', $id)->first();
        
        return view('backend.ongoingoffer.edit', compact('ongoingoffer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OngoingOffers  $ongoingOffers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ongoingoffer                  =     OngoingOffers::find($id);
        $ongoingoffer->title           =     $request->title;
        $ongoingoffer->image_name      =     $request->file->hashName();
        $ongoingoffer->link            =     $request->link;
        $ongoingoffer->description     =     $request->description;
        $ongoingoffer->status          =     $request->status;

        if($request->file("file")) {
            $big_file = $request->file('file');
            $request->file->store('ongoingoffer', 'public');
            $ongoingoffer->image_name = $big_file->hashName();
        } 

        $ongoingoffer->save(); // Finally, update the record.
        return redirect()->route('admin.ongoingoffer')->with('success','Offer Has Been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OngoingOffers  $ongoingOffers
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ongoingoffer = OngoingOffers::find($id);
        @unlink(public_path('storage/ongoingoffer/'.$ongoingoffer->image_name));
        $ongoingoffer->delete();

        return redirect()->route('admin.ongoingoffer')->with('success','Offer has been deleted');
    }
}
