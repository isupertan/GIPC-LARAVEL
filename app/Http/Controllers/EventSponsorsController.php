<?php

namespace App\Http\Controllers;

use App\Models\EventSponsors;
use Illuminate\Http\Request;

class EventSponsorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'event_id'            => 'required',
            'sponsor_id'          => 'required',
            'sponsor_category_id' => 'required',
       ]);

            //Saving the record of speakers
            $sponsor_id = [];

            if(!empty($request->sponsor_id)){
                foreach($request->sponsor_id as $name)
                {
                   
                    
                   $sponsor_id[] = $name;  
                   $response = EventSponsors::create([
                //    $response = EventSponsors::create([
                        'event_id'               => $request->event_id,
                        'sponsor_id'             => $name,
                        'sponsor_category_id'    => $request->sponsor_category_id,
                    ]);
                }
            }
             

        return redirect()->back()->with('success','Sponsor has been Added to the Event');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EventSponsors  $eventSponsors
     * @return \Illuminate\Http\Response
     */
    public function show(EventSponsors $eventSponsors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EventSponsors  $eventSponsors
     * @return \Illuminate\Http\Response
     */
    public function edit(EventSponsors $eventSponsors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EventSponsors  $eventSponsors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EventSponsors $eventSponsors)
    {
        //
    }

    /** destroy
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EventSponsors  $eventSponsors
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $EventSponsors = EventSponsors::find($id);
        $EventSponsors->delete();
        return redirect()->back()->with('success','Sponsor has been deleted from the event');
    }
}
