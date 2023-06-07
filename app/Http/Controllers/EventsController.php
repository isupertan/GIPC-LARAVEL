<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;
use App\Models\EventDay;
use App\Models\Speakers;
use App\Models\EventDayAgenda;
use App\Models\Sponsors;
use App\Models\EventSponsors;
use App\Models\SponsorsCategory;


class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Events::all();
        return view('backend.event.list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.event.add');
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
            $request->file->store('events', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $categories                       =     new Events;
            $categories->title                =     $request->title;
            $categories->slug                 =     str_slug($request->title);
            $categories->image_name           =     $request->file->hashName();
            $categories->image_alt            =     $request->img_alt;
            $categories->place                =     $request->place;
            $categories->startdate            =     $request->startdate;
            $categories->enddate              =     $request->enddate;
            $categories->venue                =     $request->venue;
            $categories->organiseremail       =     $request->organiseremail;
            $categories->organiserphone       =     $request->organiserphone;
            $categories->meta_title           =     $request->meta_title;
            $categories->meta_description     =     $request->meta_description;

            $categories->save(); // Finally, save the record.
        }

        return redirect()->route('admin.event')->with('success','Upcoming Event Has Been Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function show(Events $events)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category        =   Events::with('eventsponsor')->find($id);
        $eventdays       =   EventDay::with('agenda')->where('event_id', $id)->orderBy('id', 'DESC')->get();
        $agendas         =   EventDayAgenda::with('speakers')->get();
        $speakers        =   Speakers::all();
        $eventspeakers   =   Speakers::with('eventspeakers')->get();
        $sponsorcats     =   SponsorsCategory::with('eventsponsorlink')->get();
        $sponsors        =   Sponsors::all();
        $eventsponsors   =   EventSponsors::with('sponsorcats','sponsorsfull')->where('event_id', $id)->get();
        // dd($eventsponsors);
        return view('backend.event.edit', compact('category','eventdays','speakers','agendas','eventspeakers','sponsorcats','sponsors','eventsponsors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $this->validate($request, [
            'title'             => 'required|string',
        ]);

            $categories                       =     Events::find($id);
            $categories->title                =     $request->title;
            $categories->image_alt            =     $request->img_alt;
            $categories->place                =     $request->place;
            $categories->startdate            =     $request->startdate;
            $categories->enddate              =     $request->enddate;
            $categories->venue                =     $request->venue;
            $categories->organiseremail       =     $request->organiseremail;
            $categories->organiserphone       =     $request->organiserphone;
            $categories->meta_title           =     $request->meta_title;
            $categories->meta_description     =     $request->meta_description;
            
        if($request->file("file")) {
            $big_file = $request->file('file');
            $request->file->store('events', 'public');
            $categories->image_name = $big_file->hashName();
        } 

        $categories->save(); // Finally, save the record.


        return redirect()->route('admin.event')->with('success','Upcoming Event has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Events = Events::find($id);
        @unlink(public_path('storage/events/'.$Events->image_name));
        $Events->delete();
        return redirect()->back()->with('success','Upcoming Event has been deleted');
    }
}
