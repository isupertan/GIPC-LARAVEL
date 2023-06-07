

@extends('gipcevent_layout')
@section('bodycontent')
    <!-- BODY START -->
    <!-- 1st section -->
    <div class="row">
      <div
        class="col-lg-12 section-home-one"
        style="
          background-image: url({{url('storage/events',$category->image_name)}});height:50vh;padding-top:100px;
        "
      >
        <!-- ABOSULTE PATH -->

        <h1 class="text-center">{{$category->title}}</h1>
        <p>
          <strong>{{$category->venue}}, {{$category->startdate}}</strong> 
        </p>

        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <a class="btn btn-danger" href="{{route('upcomingevent',[$category->id,$category->slug])}}">
              {{$category->title}}
            </a>
            <a class="btn btn-primary" href="{{route('upcomingeventagenda',[$category->id,$category->slug])}}">
              View Agenda
            </a>
            <a class="btn btn-success" href="{{route('upcomingeventspeaker',[$category->id,$category->slug])}}">
              View Speakers
            </a>
            <a class="btn btn-warning" href="">
              View Sponsors
            </a>
          </div>
        </div>

      </div>
    </div>

    <!-- Featured Speaker  section start  -->
    <div class="sp_section_1">
      <div class="container pb-2">
        <div class="row">
          <h2 class="sp_head text-center  mt-5 mb-3">Featured Speakers</h2>
        </div>
        <div class="row">
          {{-- Loop --}}
         @foreach($eventspeakerstwo as $spkr)
          @foreach($speakers as $bkr)
           @if($spkr->speaker_id == $bkr->id  AND $bkr->featured == 1)


          <div
            class="col-lg-4"
            data-aos="zoom-in"
            data-aos-duration="800"
            data-bs-toggle="modal"
            data-bs-target="#{{$bkr->slug}}"
          >
            <div class="sp_card d-flex">

              <div class="sp_dp">
                <img
                  src="{{url('storage/speaker', $bkr->image_name)}}"
                  width="30%"
                  class="rounded-circle"
                  alt="{{$bkr->image_alt}}"
                />
              </div>
              <div class="sp_title">
                <p class="sp_name">{{ $bkr->title }}</p>
                <p class="sp_designation">{{ $bkr->designation }}</p>
                <p class="sp_designation">{{ $bkr->company }}</p>
              </div>
            </div>
          </div>

          @endif
         @endforeach
        @endforeach
          {{-- Loop --}}
        
    
        </div>
        
      </div>
    </div>

    <!-- Featured Speaker Modal start-->
    <!-- Huw Watkins -->
   @foreach($eventspeakerstwo as $spkr)
    @foreach($speakers as $bkr)
     @if($spkr->speaker_id == $bkr->id AND $bkr->featured == 1)
      
    <div
      class="modal fade"
      id="{{$bkr->slug}}"
      tabindex="-1"
      aria-labelledby="{{$bkr->slug}}Label"
      aria-hidden="true"
    >
      <div
        class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down"
      >
        <div class="modal-content">
          <div class="modal-header">
           
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="sp_card_ d-flex">
            <div class="sp_dp_">
              <img
                src="{{url('storage/speaker', $bkr->image_name)}}"
                width="30%"
                class="rounded-circle"
                alt="{{$bkr->image_alt}}"
              />
            </div>
            <div class="sp_title_">
              <p class="sp_name_">{{$bkr->title}}</p>
              <p class="sp_designation_">{{$bkr->designation}}</p>
              <p class="sp_designation_">{{$bkr->company}}</p>
            </div>
          </div>
          <div class="sp_modal_about">
            <p class="modal_about_title">About the speaker</p>
            <p class="modal_about_details">
              {!!$bkr->description!!}
            </p>
            {{-- <p class="modal_about_title">Sessions by speaker</p> --}}
          </div>
          {{-- <div class="sp_modal_event">
            <p class="sp_ev_title">
              Plenary Session 4 - Correlation between startup & IP Valuations
            </p>
            <div class="event_details d-block">
              <a href="#" class="sp_ev"
                ><i class="fa-solid fa-calendar"></i>Day 2: Sun, Feb 19</a
              >
              <a href="#" class="sp_ev"
                ><i class="fa-solid fa-clock ms-lg-3"></i>09:30 AM - 11:00 AM
                (IST)</a
              >
              <a href="#" class="sp_ev"
                ><i class="fa-solid fa-location-dot ms-lg-3"></i>Grand Ball Room</a
              >
            </div>
            <a href="#" class="sp_ev all"> All tracks</a>
          </div> --}}
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button>
          </div>
        </div>
      </div>
    </div>

    @endif
    @endforeach
   @endforeach
    

    <!--  Featured Speaker  section end  -->
    <!-- speaker section  start -->
    <div class="sp_section_2">
      <div class="container pb-2">
        <div class="row">
          <h2 class="sp_head_2 text-center">Speakers</h2>
        </div>
       <div class="row">
       @foreach($eventspeakerstwo as $spkr)
        @foreach($speakers as $bkr)
         @if($spkr->speaker_id == $bkr->id  AND $bkr->featured != 1)
          <div
            class="col-lg-4"
            data-aos="zoom-in"
            data-aos-duration="800"
            data-bs-toggle="modal"
            data-bs-target="#{{ $bkr->slug }}"
          >
            <div class="sp_card d-flex">
              <div class="sp_dp">
                <img
                  src="{{url('storage/speaker',$bkr->image_name)}}"
                  width="30%"
                  class="rounded-circle"
                  alt="{{ $bkr->image_alt }}"
                />
              </div>
              <div class="sp_title">
                <p class="sp_name">{{ $bkr->title }}</p>
                <p class="sp_designation">{{ $bkr->designation }}</p>
                <p class="sp_designation">{{ $bkr->company }}</p>
              </div>
            </div>
          </div>

          @endif
         @endforeach
        @endforeach
          
        </div>


      </div>
    </div>

    <!-- Speaker Modal start-->
    <!-- Lakshika Joshi -->
    @foreach($eventspeakerstwo as $spkr)
    @foreach($speakers as $bkr)
     @if($spkr->speaker_id == $bkr->id  AND $bkr->featured != 1)
    <div
      class="modal fade"
      id="{{ $bkr->slug }}"
      tabindex="-1"
      aria-labelledby="{{ $bkr->slug }}Label"
      aria-hidden="true"
    >
      <div
        class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down"
      >
        <div class="modal-content">
          <div class="modal-header">
           
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="sp_card_ d-flex">
            <div class="sp_dp_">
              <img
                src="{{url('storage/speaker',$bkr->image_name)}}"
                width="30%"
                class="rounded-circle"
                alt="{{$bkr->image_alt}}"
              />
            </div>
            <div class="sp_title_">
              <p class="sp_name_">{{$bkr->title}}</p>
              <p class="sp_designation_">{{$bkr->designation}}</p>
              <p class="sp_designation_">{{$bkr->company}}</p>
            </div>
          </div>
          <div class="sp_modal_about">
            <p class="modal_about_title">About the speaker</p>
            <p class="modal_about_details">
              {!! $bkr->description !!}
            </p>
            {{-- <p class="modal_about_title">Sessions by speaker</p> --}}
          </div>
          {{-- <div class="sp_modal_event">
            <p class="sp_ev_title">
              Plenary Session 4 - Correlation between startup & IP Valuations
            </p>
            <div class="event_details d-block">
              <a href="#" class="sp_ev"
                ><i class="fa-solid fa-calendar"></i>Day 2: Sun, Feb 19</a
              >
              <a href="#" class="sp_ev"
                ><i class="fa-solid fa-clock ms-lg-3"></i>09:30 AM - 11:00 AM
                (IST)</a
              >
              <a href="#" class="sp_ev"
                ><i class="fa-solid fa-location-dot ms-lg-3"></i>Grand Ball Room</a
              >
            </div>
            <a href="#" class="sp_ev all"> All tracks</a>
          </div> --}}
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button>
          </div>
        </div>
      </div>
    </div>

    @endif
   @endforeach
 @endforeach
    <!-- Mayank Sood -->
    <div
      class="modal fade"
      id="Mayank"
      tabindex="-1"
      aria-labelledby="MayankLabel"
      aria-hidden="true"
    >
      <div
        class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down"
      >
        <div class="modal-content">
          <div class="modal-header">
            
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="sp_card_ d-flex">
            <div class="sp_dp_">
              <img
                src="https://previewengine-accl.zohoexternal.com/thumbnail/BACKSTAGE/62409000000791160?cli-msg=eyJtb2R1bGUiOiJQcm9maWxlSW1hZ2UiLCJpZCI6IjYyNDA5MDAwMDAwNzkxMTYwIiwicG9ydGFsSWQiOiI3OTE4NzMxMjkifQ=="
                width="30%"
                class="rounded-circle"
                alt=""
              />
            </div>
            <div class="sp_title_">
              <p class="sp_name_">Mayank Sood</p>
              <p class="sp_designation_">President </p>
              <p class="sp_designation_">Eurasian Patent Office</p>
            </div>
          </div>
          <div class="sp_modal_about">
            <p class="modal_about_title">About the speaker</p>
            <p class="modal_about_details">
              Head of the Federal Service for Intellectual Property (Rospatent).
              <br />
              <br />
             Since February 18, 2022 - President of the Eurasian Patent Office (EAPO) of the Eurasian Patent Organization.
              <br />
              <br />
              Honored Lawyer of the Russian Federation, PhD in Law, Associate Professor, Secretary of the Union of Writers of Russia.
            </p>
            <p class="modal_about_title">Sessions by speaker</p>
          </div>
          <div class="sp_modal_event">
            <p class="sp_ev_title">
              Plenary Session 2 - Eurasian Patent System – History, Modern State & Further Development
            </p>
            <div class="event_details d-block">
              <a href="#" class="sp_ev"
                ><i class="fa-solid fa-calendar"></i>Day 2: Sun, Feb 19</a
              >
              <a href="#" class="sp_ev"
                ><i class="fa-solid fa-clock ms-lg-3"></i>09:30 AM - 11:00 AM
                (IST)</a
              >
              <a href="#" class="sp_ev"
                ><i class="fa-solid fa-location-dot ms-lg-3"></i>Grand Ball Room</a
              >
            </div>
            <a href="#" class="sp_ev all"> All tracks</a>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Prof. Ajit Parulekar -->
    <div
      class="modal fade"
      id="Parulekar"
      tabindex="-1"
      aria-labelledby="ParulekarLabel"
      aria-hidden="true"
    >
      <div
        class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down"
      >
        <div class="modal-content">
          <div class="modal-header">
            
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="sp_card_ d-flex">
            <div class="sp_dp_">
              <img
                src="https://previewengine-accl.zohoexternal.com/thumbnail/BACKSTAGE/62409000000928007?cli-msg=eyJtb2R1bGUiOiJQcm9maWxlSW1hZ2UiLCJpZCI6IjYyNDA5MDAwMDAwOTI4MDA3IiwicG9ydGFsSWQiOiI3OTE4NzMxMjkifQ=="
                width="30%"
                class="rounded-circle"
                alt=""
              />
            </div>
            <div class="sp_title_">
              <p class="sp_name_">Prof. Ajit Parulekar</p>
              <p class="sp_designation_">Director</p>
              <p class="sp_designation_">Goa Institute of Management</p>
            </div>
          </div>
          <div class="sp_modal_about">
            <p class="modal_about_title">About the speaker</p>
            <p class="modal_about_details">
              Abhai Pandey is a Partner and leads the Litigation & Enforcement Team at LexOrbis. He focuses on intellectual property litigations, criminal enforcement and contested proceedings at the Trademark and Patent Offices. He also advises clients on brand protection strategies for social media, internet and advertisements and has been successfully running several anti-counterfeiting campaigns in India for a variety of clients ranging from Fortune 500 companies to individual entrepreneurs.
              <br />
              <br />
             He has successfully resolved cases in favour of the clients and has represented them at multiple forums including several district and high courts, erstwhile Intellectual Property Appellate Board and Indian Trademark and Patent Offices.
              <br />
              <br />
             He represents a broad range of businesses and industries, including fashion, media & entertainment, publishing, fast moving consumer goods, pharmaceutical, biotechnology, electronics, automobile, and ICT.
             <br />
              <br />
              Abhai has ran pan-India anti-piracy campaign for global publishing industry in India resulting in criminal raid actions of over 500+ pirate businesses. This was the first ever anti-piracy campaign initiated by the Global Publishing Industry Association on behalf of its member companies. The campaign trained the enforcement agencies on multiple aspects of copyright laws and enforcement in India.
              <br />
              <br />
              Abhai has led anti-counterfeiting campaigns for luxury goods brands and has organized raid actions across India against leading importers, stockists and online sellers. The campaign involved legal actions against the counterfeit sellers at first generation e-market in early 2000s and open debate of the platform’s liabilities.
              <br />
              <br />
              He has also led and devised strategies for a group of automobile component companies to stop counterfeiting of their products in north India, particularly in semi-urban and rural markets.
              <br />
              <br />
              Abhai is actively involved with many IP organizations, including INTA, AIPPI and APAA. 
            </p>
            <p class="modal_about_title">Sessions by speaker</p>
          </div>
          <div class="sp_modal_event mb-2">
            <p class="sp_ev_title">
              Technical Session 1 - Compulsory Licensing Vs Second Medical Use Patent - Finding the sweet spot
            </p>
            <div class="event_details d-block">
              <a href="#" class="sp_ev"
                ><i class="fa-solid fa-calendar"></i>Day 2: Sun, Feb 19</a
              >
              <a href="#" class="sp_ev"
                ><i class="fa-solid fa-clock ms-lg-3"></i>09:30 AM - 11:00 AM
                (IST)</a
              >
              <a href="#" class="sp_ev"
                ><i class="fa-solid fa-location-dot ms-lg-3"></i>Grand Ball Room</a
              >
            </div>
            <a href="#" class="sp_ev all"> All tracks</a>
          </div>
          <div class="sp_modal_event event_2">
            <p class="sp_ev_title">
              Technical Session 1 - Compulsory Licensing Vs Second Medical Use Patent - Finding the sweet spot
            </p>
            <div class="event_details d-block">
              <a href="#" class="sp_ev"
                ><i class="fa-solid fa-calendar"></i>Day 2: Sun, Feb 19</a
              >
              <a href="#" class="sp_ev"
                ><i class="fa-solid fa-clock ms-lg-3"></i>09:30 AM - 11:00 AM
                (IST)</a
              >
              <a href="#" class="sp_ev"
                ><i class="fa-solid fa-location-dot ms-lg-3"></i>Grand Ball Room</a
              >
            </div>
            <a href="#" class="sp_ev all"> All tracks</a>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Speaker Modal end  -->

    <!-- ===========================  -->
<!-- bottom section  -->
<div class="bottom_bar bottom_bg p-4">
<div class="container">
    <div class="row ">
        <div class="col-lg-12 text-center bot_text">
            <h2 class="">
                Interested in Speaking at GIPC?
            </h2>
            <span class="bot_mail">Drop us an email at</span> <a href="mailto:mail@gipc2023.com">mail@gipc2023.com</a>
        </div>
    </div>
</div>
</div>

@endsection