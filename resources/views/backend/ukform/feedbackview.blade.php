@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">VIEW FORM</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">VIEW FORM</li>
        </ol>
    <!-- Page Body -->
    <div class="row">
        <div class="col-lg-9 mx-auto">
          <div class="card mb-5" style="padding: 15px;border:2px solid #222">
           <div class="card-header">
             <h5 class="text-center"> SUBMITTED BY <strong>{{$formDetail->f_name}} 
                {{$formDetail->m_name}} {{$formDetail->l_name}}</strong>
                 on <small><i>{{$formDetail->created_at}}</i></small></h5>
           </div>
           <div class="row">
               <div class="col-lg-12">



                   <div class="row">
                    <div class="col-lg-7"><strong>Name</strong></div>
                    <div class="col-lg-5">{{$formDetail->f_name}} {{$formDetail->m_name}} {{$formDetail->l_name}}</div>
                   </div>

                   <div class="row">
                    <div class="col-lg-7"><strong>Email</strong></div>
                    <div class="col-lg-5">{{$formDetail->email}}</div>
                   </div>

                   <div class="row">
                    <div class="col-lg-7"><strong>Phone</strong></div>
                    <div class="col-lg-5">{{$formDetail->mobile}}</div>
                   </div>

                   <div class="row">
                    <div class="col-lg-7"><strong>Address</strong></div>
                    <div class="col-lg-5">{{$formDetail->address}}</div>
                   </div>

                   <div class="row">
                    <div class="col-lg-7"><strong>Zip</strong></div>
                    <div class="col-lg-5">{{$formDetail->zip}}</div>
                   </div>

                   <hr>

                   <div class="row">
                    <div class="col-lg-7"><strong>Conntry Of Birth</strong></div>
                    <div class="col-lg-5">{{$formDetail->immigration->birth_country}}</div>
                   </div>

                   <div class="row">
                    <div class="col-lg-7"><strong>Present Nationality</strong></div>
                    <div class="col-lg-5">{{$formDetail->immigration->present_natinality}}</div>
                   </div>
                   <div class="row">
                    <div class="col-lg-7"><strong>Country Of Residence</strong></div>
                    <div class="col-lg-5">{{$formDetail->immigration->residence_country}}</div>
                   </div>
                   <div class="row">
                    <div class="col-lg-7"><strong>Are you currently a resident in the UK?</strong></div>
                    <div class="col-lg-5">@if ($formDetail->immigration->residence_uk == 1) Yes @else No @endif</div>
                   </div>
                   <div class="row">
                    <div class="col-lg-7"><strong>Have you Studied in the Uk Previously?</strong></div>
                    <div class="col-lg-5">@if ($formDetail->immigration->studied_uk_prev == 1) Yes @else No @endif </div>
                   </div>
                   <div class="row">
                    <div class="col-lg-7"><strong>Have you been denied entry to the UK before ?</strong></div>
                    <div class="col-lg-5">@if ($formDetail->immigration->denied_uk == 1) Yes @else No @endif </div>
                   </div>
                   <div class="row">
                    <div class="col-lg-7"><strong>Have you ever overstayed any type of UK Visa granted to you ?</strong></div>
                    <div class="col-lg-5">@if ($formDetail->immigration->overstayed_uk == 1) Yes @else No @endif </div>
                   </div>
                   <div class="row">
                    <div class="col-lg-7"><strong>Have you ever been refused a Visa to any country ?</strong></div>
                    <div class="col-lg-5">@if ($formDetail->immigration->refuse_visa == 1) Yes @else No @endif </div>
                   </div>
                   <hr>
                   <div class="row">
                    <div class="col-lg-7"><strong>Agent Name</strong></div>
                    <div class="col-lg-5">{{$formDetail->agent->agent_name}}</div>
                  </div>
                 <hr>

           <div class="row">
            <div class="col-12">                   
                 <table class="table table-striped">
                  <thead style="background:#222;color:#fff">
                    <tr>
                      <th>UK Visa Number</th>
                      <th>Visa Type</th>
                      <th>Valid From</th>
                      <th>Valid To</th>
                      <th>Institution</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($formDetail->history as $his)
                    @if ($his->uk_visa_number != "")
                       <tr>
                        <td>{{$his->uk_visa_number}}</td>
                        <td>{{$his->visa_type}}</td>
                        <td>{{$his->valid_form}}</td>
                        <td>{{$his->valid_to}}</td>
                        <td>{{$his->institution}}</td>
                       </tr>
                     @endif
                    @endforeach 
                  </tbody>
                 </table>
             </div>
            </div>
            <hr>


                   
                <div class="row">
                    <div class="col-12">                   
                         <table class="table table-striped">
                          <thead style="background:#222;color:#fff">
                            <tr>
                              <th>Course Title</th>
                              <th>Branch/Masters/PHD</th>
                              <th>Month/Year Of Entry</th>
                            </tr>
                          </thead>
                          <tbody>
                           @foreach ($formDetail->course as $cour)
                            @if ($cour->title != "")
                               <tr>
                                <td>{{$cour->title}}</td>
                                <td>{{$cour->qualification}}</td>
                                <td>{{$cour->entry_year}}</td>
                               </tr>
                             @endif
                            @endforeach 
                          </tbody>
                         </table>
                     </div>
                    </div>
                    <hr>

                    
                <div class="row">
                    <div class="col-12">                   
                         <table class="table table-striped">
                          <thead style="background:#222;color:#fff">
                            <tr>
                              <th>Name of institution</th>
                              <th>Course</th>
                              <th>Course Of Study</th>
                              <th>Start Date</th>
                              <th>End Date</th>
                              <th>Grade / Pass %</th>
                            </tr>
                          </thead>
                          <tbody>
                           @foreach ($formDetail->academy as $acca)
                            @if ($acca->inst_name != "")
                               <tr>
                                <td>{{$acca->inst_name}}</td>
                                <td>{{$acca->course}}</td>
                                <td>{{$acca->course_study}}</td>
                                <td>{{$acca->start_date}}</td>
                                <td>{{$acca->end_date}}</td>
                                <td>{{$acca->grade}}</td>
                               </tr>
                             @endif
                            @endforeach 
                          </tbody>
                         </table>
                     </div>
                    </div>
                    <hr>

                   
                    <div class="row">
                      <div class="col-lg-7"><strong>Do you have any of the English qualifications listed below? </strong></div>
                      <div class="col-lg-5">{{$formDetail->language->eng_qualification}}</div>
                    </div>
                    <div class="row">
                      <div class="col-lg-7"><strong>Other</strong></div>
                      <div class="col-lg-5">@if ($formDetail->language->other != '') 
                        {{$formDetail->language->other}} @else N/A @endif</div>
                    </div>
                    <div class="row">
                      <div class="col-lg-7"><strong>IELTS or Others Grade / Score </strong></div>
                      <div class="col-lg-5">{{$formDetail->language->grades}}</div>
                    </div>
                    <div class="row">
                      <div class="col-lg-7"><strong>Date Achived </strong></div>
                      <div class="col-lg-5">{{$formDetail->language->achive_date    }}</div>
                    </div>
                   <hr>

                   
                   <div class="row">
                    <div class="col-lg-7"><strong>Source</strong></div>
                    <div class="col-lg-5">{{$formDetail->conenct->source }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-7"><strong>Others</strong></div>
                    <div class="col-lg-5">@if ($formDetail->conenct->other != '') 
                        {{$formDetail->conenct->other}} @else N/A @endif</div>
                  </div>
                 <hr>

                 <div class="row">
                    <div class="col-lg-7"><strong>Passport</strong></div>
                    <div class="col-lg-5">@if ($formDetail->document->passport == 1) 
                        Yes @else N/A @endif</div>
                 </div>
                 <div class="row">
                    <div class="col-lg-7"><strong>School (GCSE) Certificate</strong></div>
                    <div class="col-lg-5">@if ($formDetail->document->school_certificate == 1) 
                        Yes @else N/A @endif</div>
                 </div>
                 <div class="row">
                    <div class="col-lg-7"><strong>A Level ( 10+2) certificate</strong></div>
                    <div class="col-lg-5">@if ($formDetail->document->a_level_certificate == 1) 
                        Yes @else N/A @endif</div>
                 </div>
                 <div class="row">
                    <div class="col-lg-7"><strong>English certificate ( if applicable)</strong></div>
                    <div class="col-lg-5">@if ($formDetail->document->eng_certificate == 1) 
                        Yes @else N/A @endif</div>
                 </div>
                 <div class="row">
                    <div class="col-lg-7"><strong>Work experience letter ( if applicable)</strong></div>
                    <div class="col-lg-5">@if ($formDetail->document->work_experince == 1) 
                        Yes @else N/A @endif
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-lg-7"><strong>CV</strong></div>
                    <div class="col-lg-5">@if ($formDetail->document->cv == 1) 
                        Yes @else N/A @endif
                    </div>
                 </div>
                 <hr>
                   {{-- <div class="row">
                    <div class="col-lg-4">Address</div>
                    <div class="col-lg-8">{{$formDetail->address}}</div>
                   </div> --}}
               </div>
           </div>
        </div>
    </div>
    </div>
    </div>
</main>
@endsection

