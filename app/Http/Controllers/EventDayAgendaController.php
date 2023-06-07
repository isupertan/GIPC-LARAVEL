<?php

namespace App\Http\Controllers;

use App\Models\EventDayAgenda;
use App\Models\EventAgendaSpeakers;
use App\Models\Speakers;
use Illuminate\Http\Request;

class EventDayAgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $agenda = EventDayAgenda::all();
        // return view('backend.event.daysagendalist', compact('agenda'));
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

            'title'                             => 'required|string',
        ]);
      
            $EventDayAgenda                          =     new EventDayAgenda;
            $EventDayAgenda->eventdays_id            =     $request->eventdays_id;
            $EventDayAgenda->title                   =     $request->title;
            $EventDayAgenda->time                    =     $request->time;
            $EventDayAgenda->venue                   =     $request->venue;
            $EventDayAgenda->duration                =     $request->duration;


            $EventDayAgenda->save(); // Finally, save the record. 

            $EventDayAgenda->id;

            //Saving the record of speakers
            $speakers = [];

            if(!empty($request->speakers)){
                foreach($request->speakers as $name)
                {
                   
                    
                    $speakers[] = $name;  
                    EventAgendaSpeakers::create([
                        'speaker_id'    => $name,
                        'eventdays_id'  => $request->eventdays_id,
                        'agenda_id'     => $EventDayAgenda->id,
                        'event_id'      => $request->event_id,
                    ]);
                }
            }
             

        return redirect()->back()->with('success','Agenda has been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EventDayAgenda  $eventDayAgenda
     * @return \Illuminate\Http\Response
     */
    public function show(EventDayAgenda $eventDayAgenda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EventDayAgenda  $eventDayAgenda
     * @return \Illuminate\Http\Response
     */
    public function edit(EventDayAgenda $eventDayAgenda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EventDayAgenda  $eventDayAgenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $this->validate($request, [
            'title'             => 'required|string',
        ]);

            $EventDayAgenda                          =     EventDayAgenda::find($id);
            $EventDayAgenda->title                   =     $request->title;
            $EventDayAgenda->time                    =     $request->time;
            $EventDayAgenda->venue                   =     $request->venue;
            $EventDayAgenda->duration                =     $request->duration;
            

        $EventDayAgenda->save(); // Finally, save the record.
            //Saving the record of speakers
            $speakers = [];

            //check if already has the agenda
            // if(!empty($request->speakers)){

                

            //     foreach ($request->speakers as $name) {
            //         // $checkforagendaalive = EventAgendaSpeakers::where(['agenda_id'=> $EventDayAgenda->id, 'speaker_id' => $name ])->exists();

            //         if(EventAgendaSpeakers::where(['agenda_id'=> $EventDayAgenda->id, 'speaker_id' => $name ])->doesntExist()){
            //             $speakers[] = $name;
            //             EventAgendaSpeakers::where('agenda_id', $EventDayAgenda->id)->update([
            //                 'speaker_id'    => $name,
            //             ]);
            //         }
                      
            //         // EventAgendaSpeakers::where('id', $name)->update([

            //     }
            // }
            //check if already has the agenda if no agenda added then add speaker
           
            
            if(!empty($request->speakers) ){

              foreach($request->speakers as $name)
                {
                
               //If a speaker exist then dont add him again add new one instead
                if(EventAgendaSpeakers::where(['agenda_id'=> $EventDayAgenda->id, 'speaker_id' => $name ])->doesntExist() ){
                    
                    $speakers[] = $name;  
                    EventAgendaSpeakers::create([
                        'speaker_id'    => $name,
                        'eventdays_id'  => $request->eventdays_id,
                        'agenda_id'     => $EventDayAgenda->id,
                        'event_id'      => $request->event_id,
                    ]);
                }
                //If a agenda available and speaker available but not the in slected the delete from DB
                elseif(EventAgendaSpeakers::where(['agenda_id'=> $EventDayAgenda->id])->exists() ){
                  $activespeakersbyagenda = EventAgendaSpeakers::where(['agenda_id'=> $EventDayAgenda->id])->get();

                 foreach($activespeakersbyagenda as $activespk){
                    if($activespk->speaker_id != $name){
                        $EventAgendaSpeakers = EventAgendaSpeakers::where(['agenda_id'=> $EventDayAgenda->id, 'speaker_id' => $activespk->speaker_id ]);
                        $EventAgendaSpeakers->delete(); 
                    }
                    // elseif(empty($name == $activespk->speaker_id) ){
                    //     $speakers[] = $name;  
                    //     EventAgendaSpeakers::create([
                    //         'speaker_id'    => $name,
                    //         'eventdays_id'  => $request->eventdays_id,
                    //         'agenda_id'     => $EventDayAgenda->id,
                    //         'event_id'      => $request->event_id,
                    //     ]);
                    // }
                    
                 }



                }
             


              }

            }

            //delete if no speaker slected {{WORKING FINE}}

            if(empty($request->speakers)){

                $EventAgendaSpeakers = EventAgendaSpeakers::where('agenda_id', $EventDayAgenda->id);
                $EventAgendaSpeakers->delete();
            }

        return redirect()->back()->with('success','Agenda has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EventDayAgenda  $eventDayAgenda
     * @return \Illuminate\Http\Response
     */
    public function destroy(EventDayAgenda $eventDayAgenda)
    {
        //
    }
}
