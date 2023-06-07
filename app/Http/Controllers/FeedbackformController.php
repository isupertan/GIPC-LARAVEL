<?php

namespace App\Http\Controllers;

use App\Models\Feedbackform;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Mail;
// use App\Mail\ContactFormMail;
use Maatwebsite\Excel\Facades\Excel;
// use App\Models\Contacts;
use App\Exports\FeedbackExport;

class FeedbackformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks = Feedbackform::orderBy('id', 'DESC')->get();
        return  view('backend.ukform.feedbackform', compact('feedbacks'));
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
//    FOR DIGITAL SIGNATURE
            $folderPath = public_path('signature/');
                
            $image_parts = explode(";base64,", $request->signed);
                
            $image_type_aux = explode("image/", $image_parts[0]);
            
            $image_type = $image_type_aux[1];
            
            $image_base64 = base64_decode($image_parts[1]);

            $signature = uniqid() . '.'.$image_type;
            
            $file = $folderPath . $signature;

            file_put_contents($file, $image_base64);

        // $folderPath = public_path('signature/');
                
        // $image_parts = explode(";base64,", $request->signed);
            
        // $image_type_aux = explode("image/", $image_parts[0]);
        
        // $image_type = $image_type_aux[1];
        
        // $image_base64 = base64_decode($image_parts[1]);
        
        // $file =  uniqid() . '.'.$image_type;
        // file_put_contents($file, $image_base64);
        // return back()->with('success', 'success Full upload signature');

//    end digital signature config


        $feedback                                  =     new Feedbackform;
        $feedback->name                            =     $request->name;                  
        $feedback->uhid                            =     $request->uhid;              
        $feedback->dateofvisit                     =     $request->dateofvisit;                
        $feedback->phone                           =     $request->phone;              
        $feedback->email                           =     $request->email;              
        $feedback->openfeedback                    =     $request->openfeedback;              
        $feedback->publishable                     =     $request->publishable;              
        $feedback->overallrating                   =     $request->overallrating;              
        $feedback->reasonofrating                  =     $request->reasonofrating;              
        $feedback->regularsource                   =     $request->regularsource;              
        $feedback->rffer                           =     $request->rffer;              
        $feedback->easeappointment                 =     $request->easeappointment;              
        $feedback->easeambiance                    =     $request->easeambiance;              
        $feedback->easebillingtime                 =     $request->easebillingtime;              
        $feedback->easewaitingtime                 =     $request->easewaitingtime;              
        $feedback->easediagonosis                  =     $request->easediagonosis;              
        $feedback->investigationappointment        =     $request->investigationappointment;              
        $feedback->investigationwaiting            =     $request->investigationwaiting;              
        $feedback->investigationreport             =     $request->investigationreport;              
        $feedback->nurse                           =     $request->nurse;              
        $feedback->bloodcollection                 =     $request->bloodcollection;              
        $feedback->radiology                       =     $request->radiology;              
        $feedback->technurse                       =     $request->technurse;              
        $feedback->techbloodcollection             =     $request->techbloodcollection;              
        $feedback->techradiology                   =     $request->techradiology;  
        $feedback->image_name                      =     $signature;             


        $feedback->save();
        return redirect()->back()->with('success','Your Feedback has been recieved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feedbackform  $feedbackform
     * @return \Illuminate\Http\Response
     */
    public function show(Feedbackform $feedbackform)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feedbackform  $feedbackform
     * @return \Illuminate\Http\Response
     */
    public function edit(Feedbackform $feedbackform)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feedbackform  $feedbackform
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feedbackform $feedbackform)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feedbackform  $feedbackform
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feedbackform $feedbackform)
    {
        //
    }
    //export to excel
    public function exportfeedback(){
        return Excel::download(new FeedbackExport, 'feedbackform.xlsx');
    }
}
