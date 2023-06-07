

@extends('gipcevent_layout')
@section('bodycontent')
    <!-- BODY START -->
    <!-- 1st section -->

    <div class="row">
      <div
        class="col-lg-12 section-home-one"
        style="
          background-image: url({{url('storage/events',$category->image_name)}});
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
          </div>
        </div>

      </div>
    </div>

    <!-- new section 01 -->
    <section
      data-section-id="62409000000002229"
      id="ember564"
      class="bs-section default community-section-description primary-button ember-view"
    >
      <div class="background-layer" style="background: #ffffff; opacity: 1">
        <!---->
      </div>
      <article
        id="ember565"
        class="foreground-layer bs-container ember-view"
        style="min-height: 0px"
      >
        <div
          data-element-id="62409000000002091"
          id="ember566"
          class="ember-view"
        >
          <h3
            text-id="62409000000002093"
            id="ember567"
            class="section-title ember-view mt-4"
          >
            <!---->
            <p class="ql-align-center text-center">
              <span style="color: rgb(41, 41, 41)" class="gipc_title"
                >Global IP Convention</span
              >
            </p>
          </h3>
          <!----><!----><!----><!---->
        </div>
        <div
          data-element-id="62409000000002094"
          id="ember568"
          class="ember-view"
        >
          <h5
            text-id="62409000000002096"
            id="ember569"
            class="section-sub-title ember-view"
          >
            <!---->
            <p
              style="line-height: 2; color: #757575"
              class="ql-align-center text-center"
            >
              <strong>Asia's Leading Convention on Innovation &amp; IP</strong>
            </p>
          </h5>
          <!----><!----><!----><!---->
        </div>
        <div
          data-element-id="62409000000002097"
          id="ember570"
          class="ember-view container"
        >
          <div
            text-id="62409000001120022"
            id="ember571"
            class="markdown-contain ember-view"
          >
            <!---->
            <p class="ql-align-center text-center">
              <span style="color: rgb(41, 41, 41)"
                >Global Intellectual Property Convention (GIPC) is Asia's
                leading conference for in-house IP counsels and innovators to
                interact with IP attorneys from around the world to discuss best
                practices and solutions to maximize the value of their
                innovation and IP. Since 2009, more than three thousand nine
                hundred delegates have participated from over fifty
                countries.</span
              >
            </p>
          </div>
          <!----><!----><!----><!---->
        </div>
      </article>
    </section>

    <div class="row">
      <div class="col-lg-12 paralax-wrapper">
        <div class="container">
          <!--STAT -->

          <div class="row mt-2">
            <div data-element-id="" id="ember566" class="ember-view">
              <h3
                text-id="62409000000002093"
                id="ember567"
                class="section-title ember-view mt-4"
              >
                <!---->
                <p class="ql-align-center text-center">
                  <span style="color: rgb(41, 41, 41)" class="gipc_title mt-3 mb-3"
                    >The Legacy</span
                  >
                </p>
              </h3>
              <!----><!----><!----><!---->
            </div>
            <div class="col-lg-3 stat-holder-home">
              <div class="stat-count">
                <span class="counter counter-scale" data-count="2">14</span>
              </div>
              <div class="stat-Year">Years</div>
            </div>
            <div class="col-lg-3 stat-holder-home">
              <div class="stat-count">
                <span class="counter counter-scale" data-count="20">220</span>
              </div>
              <div class="stat-Year">Speakers</div>
            </div>
            <div class="col-lg-3 stat-holder-home">
              <div class="stat-count">
                <span class="counter counter-scale" data-count="1500">3900</span
                >+
              </div>
              <div class="stat-Year">Delegates</div>
            </div>
            <div class="col-lg-3 stat-holder-home">
              <div class="stat-count">
                <span class="counter counter-scale" data-count="10">50</span>+
              </div>
              <div class="stat-Year">Countries</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonial  -->
    <div class="row">
      <div class="col-lg-12 section-four-home">
        <div class="container">
          <!-- Heading section -->
          <div
            class="heading-wrapper-center"
            data-aos="fade-up"
            data-aos-duration="1000"
          >
          <p class="ql-align-center text-center">
            <span style="color: rgb(41, 41, 41)" class="gipc_title">Speakers</span>
          </p>

           
            {{-- <p>
              Lorem Ipsim Dolor toders Lorem Ipsim Dolor toders Lorem Ipsim
              Dolor
            </p> --}}
          </div>
          <!-- Speaker section start -->
          <div class="row">
            <div class="col-lg-12 speaker-wrapper">
              <div class="row">
                <!-- #1 -->
   
                @foreach($eventspeakerstwo as $spkr)
                 @foreach($speakers as $bkr)
                  @if($spkr->speaker_id == $bkr->id)
            
                <div
                  class="col-lg-3 col-6"
                  data-aos="zoom-in"
                  data-aos-duration="800"
                  data-bs-toggle="modal"
                  data-bs-target="#{{$bkr->slug}}"
                >
                  <div class="speaker-block-individual">
                    <!-- Speaker DP -->
                    <div class="speaker-dp">
                      <img
                        src="{{url('storage/speaker', $bkr->image_name)}}"
                        class="img-fluid" alt="{{$bkr->image_alt}}"
                      />
                    </div>
                    <!--speaker details -->
                    <div class="speaker-details">
                      <!-- Name -->
                      <h3>{{ $bkr->title }}</h3>
                      <p>
                        <i>{{ $bkr->designation }}</i><br />
                        {{ $bkr->company }}
                      </p>
                    </div>
                  </div>
                </div>



                @endif
                @endforeach
                @endforeach
         

               
               
              <!-- action button -->
              <div
                class="action-button-all-section text-center"
                data-aos="fade-up"
                data-aos-duration="800"
              >
                <a href="{{route('upcomingeventspeaker',[$category->id,$category->slug])}}">VIEW ALL SPEAKERS</a>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>


       
  @foreach($eventspeakerstwo as $spkr)
    @foreach($speakers as $bkr)
      @if($spkr->speaker_id == $bkr->id)
    <!-- Speaker Modal -->
    <!-- Prof. Dr. Heinz Goddar -->
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
                src="{{url('storage/speaker', $bkr->image_name)}}"
                width="20%"
                class="rounded-circle"
                alt="{{ $bkr->image_alt }}"
              />
            </div>
            <br/>
            <div class="sp_title_">
              <p class="sp_name_">{{ $bkr->title }}</p>
              <p class="sp_designation_">{{ $bkr->designation }}</p>
              <p class="sp_designation_">{{ $bkr->company }}</p>
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
                ><i class="fa-solid fa-location-dot ms-lg-3"></i>Grand Ball
                Room</a
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
    <!-- modal  -->

    <!-- sponsors  -->

    <h3 class="section-title ember-view mt-4">
      <!---->
      <p class="ql-align-center text-center">
        <span style="color: rgb(41, 41, 41)" class="gipc_title">Sponsors</span>
      </p>
    </h3>

    <div class="diamond">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="text-center mt-3">DIAMOND</h3>
          </div>
          <div class="col-lg-12 d-flex justify-content-center">
            <img
              src="https://iprconference.zohobackstage.com/public/portals/791873129/siteResources/62409000000105133?_=1665737192106"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>
    <hr style="margin-top: 80px" />

    <div class="gold">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="text-center mt-3">GOLD</h3>
          </div>
          <div class="col-lg-12 d-flex justify-content-center">
            <img
              src="https://iprconference.zohobackstage.com/public/portals/791873129/siteResources/62409000000939009?_=1674133044421"
              class="img-fluid mt-3"
              width="10%"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>
    <hr style="margin-top: 80px" />
    <div class="platinum">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="text-center mt-3">PLATINUM</h3>
          </div>
          <div class="col-lg-12 d-flex justify-content-center">
            <img
              src="https://iprconference.zohobackstage.com/public/portals/791873129/siteResources/62409000000105153?_=1665737944461"
              class="img-fluid mt-3"
              width="20%"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>
    <hr style="margin-top: 80px" />
    <div class="stratigic">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="text-center mt-3">STRATEGIC SPONSOR</h3>
          </div>
          <div class="col-lg-12 d-flex justify-content-center">
            <img
              src="https://iprconference.zohobackstage.com/public/portals/791873129/siteResources/62409000000105081?_=1665736075210"
              class="img-fluid mt-3"
              width="15%"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>
    <hr style="margin-top: 80px" />
    <div class="silver">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="text-center mt-3">SILVER</h3>
          </div>
          <div class="col-lg-12 text-center">
            <img
              src="https://iprconference.zohobackstage.com/public/portals/791873129/siteResources/62409000000900078?_=1673873417259"
              class="img-fluid mt-3 me-4"
              width="15%"
              alt=""
            />
            <img
              src="https://iprconference.zohobackstage.com/public/portals/791873129/siteResources/62409000000791111?_=1672643531309"
              class="img-fluid mt-3"
              width="15%"
              alt=""
            />
            <img
              src="https://iprconference.zohobackstage.com/public/portals/791873129/siteResources/62409000000791143?_=1672645382802"
              class="img-fluid mt-3 ms-4"
              width="15%"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>
    <hr style="margin-top: 80px" />
    <div class="bronze">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="text-center mt-3">BRONZE</h3>
          </div>
          <div class="col-lg-12 text-center">
            <img
              src="https://iprconference.zohobackstage.com/public/portals/791873129/siteResources/62409000000727047?_=1671533413925"
              class="img-fluid mt-3 me-4"
              width="15%"
              alt=""
            />

            <img
              src="https://iprconference.zohobackstage.com/public/portals/791873129/siteResources/62409000000745039?_=1671703214654"
              class="img-fluid mt-3 ms-4"
              width="10%"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>
    <hr style="margin-top: 80px" />
    <div class="associate">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="text-center mt-3">Associate</h3>
          </div>
          <div class="col-lg-12 text-center">
            <img
              src="https://iprconference.zohobackstage.com/public/portals/791873129/siteResources/62409000000487056?_=1669617319504"
              class="img-fluid mt-3 mx-3"
              width="15%"
              alt=""
            />
            <img
              src="https://iprconference.zohobackstage.com/public/portals/791873129/siteResources/62409000000545013?_=1669889202404"
              class="img-fluid mt-3 mx-3"
              width="15%"
              alt=""
            />
            <img
              src="https://iprconference.zohobackstage.com/public/portals/791873129/siteResources/62409000000666227?_=1670828872213"
              class="img-fluid mt-3 mx-3"
              width="13%"
              alt=""
            />
            <img
              src="https://iprconference.zohobackstage.com/public/portals/791873129/siteResources/62409000000727035?_=1671532884933"
              class="img-fluid mt-3 mx-3"
              width="15%"
              alt=""
            />
            <img
              src="https://iprconference.zohobackstage.com/public/portals/791873129/siteResources/62409000001354011?_=1675925516885"
              class="img-fluid mt-3 mx-3"
              width="7%"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>
    <hr style="margin-top: 80px" />
    <div class="Supporting">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="text-center mt-3">SUPPORTING PARTNER</h3>
          </div>
          <div class="col-lg-12 text-center">
            <img
              src="https://iprconference.zohobackstage.com/public/portals/791873129/siteResources/62409000000791098?_=1672643294335"
              class="img-fluid mt-3"
              width="15%"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>
    <hr style="margin-top: 80px" />
    <div class="Academic mb-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="text-center mt-3">ACADEMIC PARTNER</h3>
          </div>
          <div class="col-lg-12 text-center">
            <img
              src="https://iprconference.zohobackstage.com/public/portals/791873129/siteResources/62409000000625022?_=1670567629315"
              class="img-fluid mt-3 me-5"
              width="10%"
              alt=""
            />
            <img
              src="https://iprconference.zohobackstage.com/public/portals/791873129/siteResources/62409000000895521?_=1673954198333"
              class="img-fluid mt-3 ms-5"
              width="10%"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>

@endsection