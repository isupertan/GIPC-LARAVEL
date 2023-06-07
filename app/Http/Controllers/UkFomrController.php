<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ukform\Ukhistory;
use App\Models\Ukform\Primary;
use App\Models\Ukform\Langiage;
use App\Models\Ukform\immigration;
use App\Models\Ukform\Document;
use App\Models\Ukform\Course;
use App\Models\Ukform\Conenct;
use App\Models\Ukform\agent;
use App\Models\Ukform\academy;
use App\Exports\UkformExport;
use Maatwebsite\Excel\Facades\Excel;

class UkFomrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formDetails =   Primary::with('history', 'immigration', 'language', 
        'course', 'document', 'conenct', 
        'agent', 'academy')->get();
        return view('backend.ukform.list', compact('formDetails'));
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
        // echo "<pre>";
        // print_r($request->all());
        // echo "</pre>";

        $primary                      =     new Primary;
        $primary->f_name              =     $request->f_name;
        $primary->m_name              =     $request->m_name;
        $primary->l_name              =     $request->l_name;
        $primary->address             =     $request->address;
        $primary->zip                 =     $request->zip;
        $primary->mobile              =     $request->mobile;
        $primary->email               =     $request->email;

        $primary->save(); 
        $primary->id;
        

        //Immigration History
        $imm                          =    new immigration;
        $imm->primary_id              =    $primary->id; 
        $imm->birth_country           =    $request->birth_country; 
        $imm->present_natinality      =    $request->present_natinality; 
        $imm->residence_country       =    $request->residence_country; 
        $imm->residence_uk            =    $request->residence_uk; 
        $imm->denied_uk               =    $request->denied_uk; 
        $imm->refuse_visa             =    $request->refuse_visa; 
        $imm->studied_uk_prev         =    $request->studied_uk_prev; 
        $imm->overstayed_uk           =    $request->overstayed_uk; 

        $imm->save(); 
        
        //Visa History
        $uk_visa_number  = $request->uk_visa_number;
        $visa_type       = $request->visa_type;
        $valid_form      = $request->valid_form;
        $valid_to        = $request->valid_to;
        $institution     = $request->institution;

        $uk_visa_number_count = count($request->uk_visa_number);


        for ($i = 0; $i < $uk_visa_number_count; $i++) { 
            // if($uk_visa_number[$i] != ''){
                $uk_visa_number_row = [
                  'primary_id'        =>     $primary->id,
                  'uk_visa_number'    =>     $uk_visa_number[$i],
                  'visa_type'         =>     $visa_type[$i],
                  'valid_form'        =>     $valid_form[$i],
                  'valid_to'          =>     $valid_to[$i],
                  'institution'       =>     $institution[$i],
                ];    
            // }
            Ukhistory::insert($uk_visa_number_row);
         }

         //Agent Details

         $agent             =  new agent;
         $agent->primary_id =  $primary->id;
         $agent->agent_name =  $request->agent_name;
         $agent->save();

         //Course Details
    
        $couse_title             = $request->title;
        $couse_qualification     = $request->qualification;
        $couse_entry_year        = $request->entry_year;


        $couse_number_count = count($request->title);

        for ($i = 0; $i < $couse_number_count; $i++) { 
            // if($uk_visa_number[$i] != ''){
                $course_title_row = [
                  'primary_id'         =>     $primary->id,
                  'title'              =>     $couse_title[$i],
                  'qualification'      =>     $couse_qualification[$i],
                  'entry_year'         =>     $couse_entry_year[$i],
                ];    
            // }
            Course::insert($course_title_row);
         }

        //  academy

        $aca_inst_name            = $request->inst_name;
        $aca_course               = $request->course;
        $aca_course_study         = $request->course_study;
        $aca_start_date           = $request->start_date;
        $aca_end_date             = $request->end_date;
        $aca_grade                = $request->grade;


        $aca_number_count = count($request->inst_name);

        for ($i = 0; $i < $aca_number_count; $i++) { 
            // if($uk_visa_number[$i] != ''){
                $aca_title_row = [
                   'primary_id'        =>        $primary->id,
                   'inst_name'         =>        $aca_inst_name[$i]   ,
                   'course'            =>        $aca_course[$i]      ,
                   'course_study'      =>        $aca_course_study[$i],
                   'start_date'        =>        $aca_start_date[$i]  ,
                   'end_date'          =>        $aca_end_date[$i]    ,
                   'grade'             =>        $aca_grade[$i]       ,
                ];    
            // }
            academy::insert($aca_title_row);
         }     

        //langiage   Langiage


        $lang                     =  new Langiage;
        $lang->primary_id         =  $primary->id;
        $lang->eng_qualification  =  $request->eng_qualification;
        $lang->other              =  $request->other;
        $lang->grades             =  $request->grades;
        $lang->achive_date        =  $request->achive_date;
        $lang->save();
         
       //Coonectin Conenct

       $connect                      =  new Conenct;
       $connect->primary_id          =  $primary->id;
       $connect->source              =  $request->source;
       $connect->others              =  $request->other_conect;
       $connect->save();     

       //Document

       $doc                       =  new Document;
       $doc->primary_id           =  $primary->id;
       $doc->passport             =  $request->passport;
       $doc->school_certificate   =  $request->school_certificate;
       $doc->a_level_certificate  =  $request->a_level_certificate;
       $doc->eng_certificate      =  $request->eng_certificate;
       $doc->work_experince       =  $request->work_experince;
       $doc->cv                   =  $request->cv;
       $doc->save();     


       return redirect()->back()->with('success','Form has been submitted');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $formDetail =   Primary::with('history', 'immigration', 'language', 
        'course', 'document', 'conenct', 
        'agent', 'academy')->where('id', $id)->first();
        return view('backend.ukform.view', compact('formDetail'));
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
        $Primary = Primary::find($id);
        $Primary->delete();
        return redirect()->back()->with('success','Form Details has been deleted');
    }

    public function exportukform() 
{
    return Excel::download(new UkformExport, 'ukforms.xlsx');
}
}
