<?php

namespace App\Http\Controllers;

use App\Models\EventDay;
use App\Models\Speakers;
use Illuminate\Http\Request;

class EventDayController extends Controller
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

            'title'             => 'required|string',
        ]);

            $categories                          =     new EventDay;
            $categories->event_id                =     $request->event_id;
            $categories->title                   =     $request->title;
            $categories->date                    =     $request->date;


            $categories->save(); // Finally, save the record.

        return redirect()->back()->with('success','Event Day has been Added');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EventDay  $eventDay
     * @return \Illuminate\Http\Response
     */
    public function show(EventDay $eventDay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EventDay  $eventDay
     * @return \Illuminate\Http\Response
     */
    public function edit(EventDay $eventDay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EventDay  $eventDay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $this->validate($request, [
            'title'             => 'required|string',
        ]);

            $categories                          =     EventDay::find($id);
            $categories->title                   =     $request->title;
            $categories->date                    =     $request->date;
            

        $categories->save(); // Finally, save the record.


        return redirect()->back()->with('success','Event Day has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EventDay  $eventDay
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $EventDay = EventDay::find($id);
        $EventDay->delete();
        return redirect()->back()->with('success','Event Day has been deleted');
    }
}
