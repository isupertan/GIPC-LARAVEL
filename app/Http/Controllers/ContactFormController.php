<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Contacts;
use App\Exports\ContactExport;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $contacts = Contacts::all();
        $contacts = Contacts::orderBy('id', 'DESC')->get();
        return  view('backend.ukform.contact', compact('contacts'));
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
            'email'            => 'required|string',
        ]);

        $contact               =     new Contacts;
        $contact->name         =     $request->name;                  
        $contact->email        =     $request->email;              
        $contact->subject      =     $request->subject;                
        $contact->message      =     $request->message;              


        $contact->save();
        return redirect()->back()->with('success','Thank You, you will receive a call back shortly');
         
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contacts::find($id);
        $contact->delete();
        return redirect()->back()->with('success','Contact Details has been deleted');
    }

    //export to excel
    public function exportcontact(){
        return Excel::download(new ContactExport, 'contacts.xlsx');
    }
}
