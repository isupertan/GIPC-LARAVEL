<?php

namespace App\Http\Controllers;

use App\Models\AppointmentDoctor;
use Illuminate\Http\Request;

class AppointmentDoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = AppointmentDoctor::orderBy('id', 'DESC')->get();
        return  view('backend.ukform.appointment', compact('contacts'));
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
            'name'             => 'required|string',
            'phone'            => 'required|string',
        ]);

        $contact               =     new AppointmentDoctor;
        $contact->name         =     $request->name;                  
        $contact->email        =     $request->email;              
        $contact->phone        =     $request->phone;                
        $contact->doctor       =     $request->doctor;              
        $contact->utm          =     $request->utm;              


        $contact->save();
        return redirect()->back()->with('success','Thank You, you will receive a call back shortly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AppointmentDoctor  $appointmentDoctor
     * @return \Illuminate\Http\Response
     */
    public function show(AppointmentDoctor $appointmentDoctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AppointmentDoctor  $appointmentDoctor
     * @return \Illuminate\Http\Response
     */
    public function edit(AppointmentDoctor $appointmentDoctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AppointmentDoctor  $appointmentDoctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AppointmentDoctor $appointmentDoctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AppointmentDoctor  $appointmentDoctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(AppointmentDoctor $appointmentDoctor)
    {
        //
    }
}
