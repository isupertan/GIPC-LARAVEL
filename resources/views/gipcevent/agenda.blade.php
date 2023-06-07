

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
          </div>
        </div>

      </div>
    </div>
    <!-- Tabs navs -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="con_border sticky-top bg-white py-2">
            <i class="fa-solid fa-circle-info ms-2"></i>
            <span style="font-size: 12px;">
              Date and time is shown in
              <span style="font-weight: 500;">(UTC +05:30) Asia/Kolkata</span>
            </span>
           {{-- <a class="t_z" href=""><i class="fa-solid fa-rotate ms-2 me-1"></i>Change timezone</a> --}}
          </div>
          {{-- Loop Day --}}
          
            <div class="tab_head sticky-top bg-white">
              <ul class="nav nav-tabs  " id="ex1" role="tablist">
                @foreach($eventdays as $eventday)
                <li class="nav-item " role="presentation">
                  <a
                    class="nav-link agenddaa"
                    id="ex1-tab-{{ $eventday->id}}"
                    data-mdb-toggle="tab"
                    href="#ex1-tabs-{{ $eventday->id}}"
                    role="tab"
                    aria-controls="ex1-tabs-{{ $eventday->id}}"
                    aria-selected="true"
                  >
                    <div
                      class="tab_heading t_1 d-flex flex-column align-items-center justify-content-center"
                    >
                      <p class="day">{{ $eventday->title }}</p>
                      <p class="d_t">{{ $eventday->date}}</p>
                    </div>
                  </a>
                </li>
                @endforeach
           
              </ul>
            </div>

            
            <!-- Tabs navs -->

            <!-- Tabs content -->
            <div class="tab-content" id="ex1-content">

            @foreach($eventdays as $eventday)

              <div
                class="tab-pane fade"
                id="ex1-tabs-{{ $eventday->id}}"
                role="tabpanel"
                aria-labelledby="ex1-tab-{{ $eventday->id}}"
              >
                <table class="table table-bordered">
                  <tbody>
                    @foreach($eventday->agenda as $agenda)
                    <tr>
                      <th scope="row">{{  $agenda->time }}</th>
                      <td>
                        <div class="t_content">
                          <i class="fa-solid fa-list-ul list_icon"></i>
                          {{  $agenda->title }}
                          <span
                            > <i class="fa-regular fa-clock me-1"></i> {{  $agenda->duration }}</span
                          >
                          <span
                            ><i class="fa-solid fa-location-dot ms-2 me-1"></i
                            >{{  $agenda->venue }}</span
                          >
                          {{-- <div class="t_list mt-3">
                            <p><i class="fa-solid fa-circle me-2"></i>All tracks</p>
                          </div> --}}

                               

                          <div class="t_list mt-3">
                            @foreach($agendas as $allagenda)
                            @foreach($allagenda->speakers as $agendaspkers)
                              @if($agenda->id == $agendaspkers->agenda_id)
                               @foreach($eventspeakers as $eventspeak)
                                @if($agendaspkers->speaker_id == $eventspeak->id)
                            {{-- <p><i class="fa-solid fa-circle me-2"></i>All tracks</p> --}}
                            <img title="{{ $eventspeak->title }}" 
                                    src="{{url('storage/speaker',$eventspeak->image_name)}}" 
                                    class="img-fluid rounded-circle" width="50px;" alt="{{$eventspeak->image_alt}}" />
                                    @endif
                              @endforeach
                            @endif
                          @endforeach
                          @endforeach
                            
                          </div>
                                                       
                          

                        </div>
                      </td>
                    </tr>
                    @endforeach

                
                     
                
                    
                  </tbody>
                </table>
              </div>

              @endforeach


            </div>


          </div>
        </div>
      </div>
    </section>
    <!-- Tabs content -->

    @endsection