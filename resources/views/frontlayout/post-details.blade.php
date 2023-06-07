@extends('front_layout_two')
{{-- @foreach ($posts as $post) --}}
 @section('title',  $post->meta_title)
 @section('description',  $post->description)
{{-- @endforeach --}}
@section('bodycontent')


{{-- @if (count($posts) > 0)
    @foreach ($posts as $post) --}}
<div class="row">
    <div class="col-lg-12 shopping-directory-page">
      <div class="container ">
        
        <h1>{{$post->title}}</h1>
        {{-- Alert --}}
        <div class="row">
          <div class="col-12 text-center">
            @include('alert.messages')
          </div>
        </div>
        {{-- Alert Ends --}}
        <p>{!! $post->description !!}</p>

        <br /><br />
      </div>
    </div>
    @if ($post->slug == 'uk-tier-4' || $post->slug == 'study-in-the-uk-form')
        

    <div class="col-lg-9 higher-education-page mx-auto mb-5">

         <!-- Forms  -->
         <form action="{{route('ukform.store')}}" method="POST" class="education-form">

          @csrf
          <!-- Personal Dewtails  -->
          <div class="form-group form-stripe">
            1 Personal Details
          </div>

          <div class="row">
            <div class="col-lg-4">
              <label>First Name</label>
              <input type="text" name="f_name">
            </div>
            <div class="col-lg-4">
              <label>Middle Name</label>
              <input type="text" name="m_name" />
            </div>
            <div class="col-lg-4">
              <label>Last Name</label>
              <input type="text" name="l_name" />
            </div>
          </div>
          <!-- / -->

          <div class="row">
            <div class="col-lg-12">
              <label>Corresponding Address</label>
              <textarea rows="4" name="address"></textarea>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4">
              <label>Pin/ZIP Code</label>
              <input type="text" name="zip" />
            </div>
            <div class="col-lg-4">
              <label>Mobile</label>
              <input type="text" name="mobile" />
            </div>
            <div class="col-lg-4">
              <label>Email</label>
              <input type="text" name="email" />
            </div>
          </div>
          <br /><br />

          <div class="form-group form-stripe">
            2 UK Immigration History ( if Applicable )
          </div>

          <div class="row">
            <div class="col-lg-4">
              <label>Conntry Of Birth</label>
              <input type="text" name="birth_country" />
            </div>
            <div class="col-lg-4">
              <label>Present Nationality</label>
              <input type="text" name="present_natinality" />
            </div>
            <div class="col-lg-4">
              <label>Country Of Residence</label>
              <input type="text" name="residence_country" />
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <label>Are you currently a resident in the UK?</label>
              <div class="d-flex align-items-center">
                <input type="checkbox" name="residence_uk" value="1">&nbsp;Yes
                <input type="checkbox" name="residence_uk" value="0">&nbsp;No
              </div>

              <label>Have you been denied entry to the UK before ?</label>
              <div class="d-flex align-items-center">
                <input type="checkbox" name="denied_uk" value="1">&nbsp;Yes
                <input type="checkbox" name="denied_uk" value="0">&nbsp;No
              </div>

              <label>Have you ever been refused a Visa to any country ?</label>
              <div class="d-flex align-items-center">
                <input type="checkbox" name="refuse_visa" value="1">&nbsp;Yes
                <input type="checkbox" name="refuse_visa" value="0">&nbsp;No
              </div>
            </div>

            <div class="col-lg-6">
              <label>Have you Studied in the Uk Previously? if yes Please field the 2A</label>
              <div class="d-flex align-items-center">
                <input type="checkbox" name="studied_uk_prev" value="1">&nbsp;Yes
                <input type="checkbox" name="studied_uk_prev" value="0">&nbsp;No
              </div>
              <label>Have you ever overstayed any type of UK Visa granted to you ?</label>
              <div class="d-flex align-items-center">
                <input type="checkbox" name="overstayed_uk" value="1">&nbsp;Yes
                <input type="checkbox" name="overstayed_uk" value="0">&nbsp;No
              </div>

            </div>
          </div>
          <br /><br />

          <div class="form-group form-stripe">2A UK Study History ( if Applicable )</div>

          <div class="row">
            <div class="col-lg-2">
              <label>UK Visa Number</label>
              <input type="text" name="uk_visa_number[]">
              <input type="text" name="uk_visa_number[]">
              <input type="text" name="uk_visa_number[]">
              <input type="text" name="uk_visa_number[]">
              <input type="text" name="uk_visa_number[]">
            </div>
            <div class="col-lg-2">
              <label>Visa Type</label>
              <input type="text" name="visa_type[]">
              <input type="text" name="visa_type[]">
              <input type="text" name="visa_type[]">
              <input type="text" name="visa_type[]">
              <input type="text" name="visa_type[]">
            </div>
            <div class="col-lg-2">
              <label>Valid From</label>
              <input type="text" name="valid_form[]">
              <input type="text" name="valid_form[]">
              <input type="text" name="valid_form[]">
              <input type="text" name="valid_form[]">
              <input type="text" name="valid_form[]">
            </div>
            <div class="col-lg-2">
              <label>Valid To</label>
              <input type="text" name="valid_to[]">
              <input type="text" name="valid_to[]">
              <input type="text" name="valid_to[]">
              <input type="text" name="valid_to[]">
              <input type="text" name="valid_to[]">
            </div>
            <div class="col-lg-4">
              <label>Institution</label>
              <input type="text" name="institution[]">
              <input type="text" name="institution[]">
              <input type="text" name="institution[]">
              <input type="text" name="institution[]">
              <input type="text" name="institution[]">
            </div>
          </div>
          <br /><br />
          <div class="form-group form-stripe">
            3 Agent Details ( if Applicable )
          </div>
          <div class="row">
            <div class="col-lg-12">
              <label>Agent Name</label>
              <input type="text" name="agent_name">
            </div>
          </div>

          <br /><br />


          <div class="form-group form-stripe">4 Details of Course(s) for which you wish to Apply</div>
          <div class="row">
            <div class="col-lg-4">
              <label>Course Title</label>
              <label>Choice 1</label>
              <input type="text" name="title[]">
              <label>Choice 2</label>
              <input type="text" name="title[]">
              <label>Choice 3</label>
              <input type="text" name="title[]">
            </div>
            <div class="col-lg-4">
              <br />
              <label style="padding-bottom: 0.5rem;">Branch/Masters/PHD</label>
              <input type="text" name="qualification[]"><br /><br />
              <input type="text" name="qualification[]"><br /><br />
              <input type="text" name="qualification[]">
            </div>
            <div class="col-lg-4">
              <br />
              <label style="padding-bottom: 0.5rem;">Month/Year Of Entry</label>
              <input type="text" name="entry_year[]"><br /><br />
              <input type="text" name="entry_year[]"><br /><br />
              <input type="text" name="entry_year[]">
            </div>
          </div>
<br /><br />
          <div class="form-group form-stripe">
            5 Full Academic History and Qualifications
          </div>

          <div class="row">
            <div class="col-lg-12">
              <p>Please list results, including those which are pending. Please attach photocopies of your certificate, transcripts, copies of all UK Visas (if applicable) copies of previous CAS', enrollment letters, and student status letters. You must give details of every institution at which you have studied even if you did not receive an award from that institution.</p>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-2">
              <label>Name of institution</label>
              <input type="text" name="inst_name[]">
              <input type="text" name="inst_name[]">
              <input type="text" name="inst_name[]">
              <input type="text" name="inst_name[]">
              <input type="text" name="inst_name[]">
            </div>

             <div class="col-lg-2">
              <label>Course</label>
              <input type="text" name="course[]">
              <input type="text" name="course[]">
              <input type="text" name="course[]">
              <input type="text" name="course[]">
              <input type="text" name="course[]">
            </div>

             <div class="col-lg-2">
              <label>Course Of Study</label>
              <input type="text" name="course_study[]">
              <input type="text" name="course_study[]">
              <input type="text" name="course_study[]">
              <input type="text" name="course_study[]">
              <input type="text" name="course_study[]">
            </div>

             <div class="col-lg-2">
              <label>Start Date</label>
              <input type="text" name="start_date[]">
              <input type="text" name="start_date[]">
              <input type="text" name="start_date[]">
              <input type="text" name="start_date[]">
              <input type="text" name="start_date[]">
            </div>

             <div class="col-lg-2">
              <label>End Date</label>
              <input type="text" name="end_date[]">
              <input type="text" name="end_date[]">
              <input type="text" name="end_date[]">
              <input type="text" name="end_date[]">
              <input type="text" name="end_date[]">
            </div>

             <div class="col-lg-2">
              <label>Grade / Pass %</label>
              <input type="text" name="grade[]">
              <input type="text" name="grade[]">
              <input type="text" name="grade[]">
              <input type="text" name="grade[]">
              <input type="text" name="grade[]">
            </div>
          </div>

          <br /><br />

          <div class="form-group form-stripe">6 English Language Requirements</div>

          <div class="row">
            <div class="col-lg-12">
              <label>Do you have any of the English qualifications listed below? (please tick all that apply):</label>
               <div class="d-flex align-items-center">
                <input type="checkbox" name="eng_qualification" value="IELTS">&nbsp;IELTS
                <input type="checkbox" name="eng_qualification" value="none">&nbsp;None Required
                <input type="checkbox" name="eng_qualification" value="other">&nbsp;Other

              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                <label>Other (please give details)</label>
                <input type="text" name="other">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label>IELTS or Others Grade / score</label>
                <input type="text" name="grades">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Date Achived</label>
                <input type="text" name="achive_date">
              </div>
            </div>
          </div>

          <div class="form-group form-stripe">7 How did you hear about us?</div>
          <div class="row">
            <div class="col-lg-12">
              <div class="d-flex align-items-center">
                <input type="checkbox" name="source" value="agent">&nbsp;Agent
                <input type="checkbox" name="source" value="search_engine">&nbsp;Search Engine
                <input type="checkbox" name="source" value="other">&nbsp;Other

              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                <label>Other(Specify)</label>
                <input type="text" name="other_conect">
              </div>
            </div>
          </div>

          <div class="form-group form-stripe">
            8 Data Protection Declaration and Tearm and Conditions
          </div>

          <div class="row">
            <div class="col-lg-12">
               <div class="form-group">
                <input type="checkbox" name="" required>&nbsp;University Term and condition will apply on All cases such as payment tuition fee, refund, courses or all cases.
              </div>
              <div class="form-group">
                 <input type="checkbox" name="" required>&nbsp;I agree to receive offer and newsletter from Himal Deals. and unsubscribe process by clicking the ‘unsubscribe’ link in any email from us.
              </div>
              <div class="form-group">
                 <input type="checkbox" name="" required>&nbsp;I agree to forward to Education Consultancy / vender to contact for further process
              </div>
            </div>
          </div>

          <div class="form-group form-stripe">9 Later we will request docs as below, if it require</div>

          <div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                
                <div class="d-flex align-items-center mobile-block">
                  <input type="checkbox" name="passport" value="1">&nbsp;Passport
                  <input type="checkbox" name="school_certificate" value="1">&nbsp;School (GCSE ) certificate
                  <input type="checkbox" name="a_level_certificate" value="1">&nbsp;A Level ( 10+2) certificate
                  <input type="checkbox" name="eng_certificate" value="1">&nbsp;English certificate ( if applicable)
                  <input type="checkbox" name="work_experince" value="1">&nbsp;Work experience letter ( if applicable)
                  <input type="checkbox" name="cv" value="1">&nbsp;CV
                </div>
               
              </div>
            </div>
          </div>

          <input type="submit" name="submit" value="Submit">

        </form>
    </div>
    @endif
  </div>
    {{-- @endforeach
  @endif --}}
@endsection