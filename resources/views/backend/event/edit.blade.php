@extends('admin_layout')
@section('bodypart')
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">EVENT</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit Event</li>
        </ol>
    {{-- <!-- Page Body --><img style="height: 20vh" src="{{url('storage/project/'.$category->category)}}" class="img-thumbnail" --}}
    <div class="row">
        <div class="col-lg-6 mx-auto mb-5 p-5" style="border:4px solid #222">
          <form method="POST" action="{{route('admin.event.update', $category->id)}}" enctype="multipart/form-data">
            @csrf
              <div class="form-group mt-3">
                <label>Event/Workshop Name</label>
                <input type="text" class="form-control" name="title" value="{{$category->title}}" required/>
              </div>


              <div class="form-group mt-3">
                <label>Event/Workshop Cover Image</label><br>
                <img style="height: 20vh" src="{{url('storage/events/'.$category->image_name)}}" class="img-thumbnail"/>
                <br><input type="file" class="form-control" name="file"/>
              </div>
              <div class="form-group mt-3">
                <label>Place</label>
                <input type="text" class="form-control" value="{{$category->place}}" name="place" required/>
              </div>

              <div class="form-group mt-3">
                <label>Start date</label>
                <input type="date" class="form-control" value="{{$category->startdate}}" name="startdate" required/>
              </div>

              <div class="form-group mt-3">
                <label>End date</label>
                <input type="date" class="form-control" value="{{$category->enddate}}" name="enddate" required/>
              </div>

              <div class="form-group mt-3">
                <label>Venue</label>
                <input type="text" class="form-control" value="{{$category->venue}}" name="venue" required/>
              </div>

              <div class="form-group mt-3">
                <label>Organiser Email</label>
                <input type="text" class="form-control" value="{{$category->organiseremail}}" name="organiseremail"/>
              </div>

              <div class="form-group mt-3">
                <label>Organiser Phone</label>
                <input type="text" class="form-control" value="{{$category->organiserphone}}" name="organiserphone"/>
              </div>

              <div class="form-group mt-3">
                <label>Video Link</label>
                <input type="text" class="form-control" value="{{$category->video}}" name="video"/>
              </div>

              {{-- SEO --}}
              <h6 class="mt-4">SEO:</h6>

              <div class="form-group mt-3">
                <label>Event Meta Title</label>
                <input type="text" class="form-control" name="meta_title"  value="{{$category->meta_title}}"  required/>
              </div>

              <div class="form-group mt-3">
                <label>Event Cover Img Alt</label>
                <input type="text" class="form-control" name="img_alt" value="{{$category->image_alt}}" required/>
              </div>

              <div class="form-group mt-3">
                <label>Event Meta POST Description</label>
                <textarea class="form-control" id="meta_description" name="meta_description" rows="5"> {{$category->meta_description}} </textarea>
              </div>
              
              <div class="form-group mt-3">
                 <input type="submit" class="btn btn-success" name="save" value="UPDATE">
              </div>
          </form>
        </div>

        {{--  --}}
        <div class="col-lg-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-block" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa fa-plus"></i> ADD NEW DAY
            </button>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-block" data-bs-toggle="modal" data-bs-target="#eventsponsor">
            <i class="fa fa-plus"></i> ADD NEW SPONSOR
            </button>


            <br/><br/><br/>
            <div class="row">
              @foreach($eventdays as $eventday)
              <div class="col-lg-12 mt-2">
                <div class="card  p-2" style="border:2px solid #222">
                  {{-- Main Day --}}
                  <div class="row">
                    <div class="col-5 ">
                      <h4 style="text-transform: uppercase">{{ $eventday->title }}</h4>
                      <small>{{ $eventday->date}}</small>
                    </div>
                    <div class="col-7 text-right">
                      <a class="btn btn-secondary"  data-bs-toggle="modal" data-bs-target="#dayeditmodal{{$eventday->id}}">
                        Edit
                     </a>
                      <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agendamodal{{$eventday->id}}"><i class="fa fa-plus"></i> Add Agenda</button>

                      <a class="btn btn-danger" onclick="return confirm('Are you sure?')"  
                         href="{{route('admin.event.destroyday', $eventday->id)}}">
                         <i class="fa fa-trash"></i>
                      </a>
                    </div>
                  </div>

                
               
                 {{-- Agneda Details --}}
                  <div class="row">
                    <div class="col-12 p-3">
                      @foreach($eventday->agenda as $agenda)
                          <hr/>
                      <div class="row">

                        <div class="col-2 text-center">
                          <h5>{{  $agenda->time }}</h5>
                        </div>

                        <div class="col-4">
                          <b>{{  $agenda->title }}</b> <br/> 
                          <small>{{  $agenda->venue }}</small><br/>
                          <small><i class="fa fa-clock"></i> {{  $agenda->duration }}</small>
                        </div>

                        <div class="col-3">
                          @foreach($agendas as $allagenda)
                           @foreach($allagenda->speakers as $agendaspkers)
                             @if($agenda->id == $agendaspkers->agenda_id)
                              @foreach($eventspeakers as $eventspeak)
                               @if($agendaspkers->speaker_id == $eventspeak->id)
                                <img title="{{ $eventspeak->title }}" 
                                     src="{{url('storage/speaker',$eventspeak->image_name)}}" 
                                     class="img-fluid rounded-circle" width="20px;" />
                              
                               @endif
                              @endforeach
                             @endif
                           @endforeach
                          @endforeach
                        </div>

                        {{-- ACTION --}}
                        <div class="col-3">
                          <div class="row">
                            {{-- EDIT --}}
                            <div class="col-12 text-right">
                              <a class="btn btn-secondary"  data-bs-toggle="modal" data-bs-target="#agendaeditmodal{{$agenda->id}}">
                                Edit
                             </a>

                            {{-- DELETE --}}
                              <a class="btn btn-danger" onclick="return confirm('Are you sure?')"  
                                href="{{route('admin.event.destroyday', $eventday->id)}}">
                                <i class="fa fa-trash"></i>
                              </a>

                            </div>

                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                  {{-- Agneda Details --}}
                

                </div>
              </div>
              @endforeach
            </div>

          {{-- Sponsors Are --}}
            <div class="row">
              <div class="col-lg-12">
                <!-- Event area -->
                <div class="row">
                
                 {{-- @foreach($category->eventsponsor as $evntspons)  --}}
                  @foreach($eventsponsors as $sponimgs)
                   
                   {{-- @if($sponcat->id == $evntspons->sponsor_category_id ) --}}
                   <div class="col-4 mt-2 mb-2">
                    <div class="card  p-3" style="border:2px solid #616161">
                      <img src="{{url('storage/sponsors',$sponimgs->sponsorsfull->image_name)}}" class="img-fluid"/> <br/>
                      <b><small class="btn btn-secondary" style="font-size: 14px;font-weight:500">{{ $sponimgs->sponsorcats->title }}</small> 
                         {{-- delete  --}}
                         <a class="btn btn-danger" onclick="return confirm('Are you sure?')"  
                         href="{{route('admin.event.destroyeventsponsor', $sponimgs->id)}}">
                         <i class="fa fa-trash"></i>
                         </a>
                      </b>
                      
                    </div>
                    
                   </div>
                   {{-- @endif --}}
                  @endforeach
                {{-- @endforeach --}}
                </div>
              </div>
            </div> 

        </div>
       
    </div>
    </div>
    
                    <!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Day</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('admin.event.daystore')}}" enctype="multipart/form-data">
          @csrf
            <div class="form-group mt-3">
              <label>DAY TITLE</label>
              <input type="text" placeholder="day 1" class="form-control" name="title" required/>
            </div>

            <div class="form-group mt-3">
              <label>Date</label>
              <input type="date" placeholder="05/14/2022" class="form-control" name="date" required/>
            </div>

            <div class="form-group mt-3">
              {{-- <label>EVENT ID</label> --}}
              <input type="hidden" class="form-control" value="{{$category->id}}" name="event_id" required/>
            </div>
              
            <div class="form-group mt-3">
              <input type="submit" class="btn btn-success" name="save" value="ADD DAY">
           </div>

        </form>
      </div>
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> --}}
    </div>
  </div>
</div> 

@foreach($eventdays as $eventday)
<!--EDIT DAY Modal -->
<div class="modal fade" id="dayeditmodal{{$eventday->id}}" tabindex="-1" aria-labelledby="dayeditmodal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDIT <b>{{$eventday->title}}</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('admin.event.dayedit',$eventday->id)}}" enctype="multipart/form-data">
          @csrf
            <div class="form-group mt-3">
              <label>DAY TITLE</label>
              <input type="text"  value="{{$eventday->title}}" class="form-control" name="title" required/>
            </div>

            <div class="form-group mt-3">
              <label>Date</label>
              <input type="date"   value="{{$eventday->date}}"  class="form-control" name="date" required/>
            </div>
              
            <div class="form-group mt-3">
              <input type="submit" class="btn btn-success" name="save" value="UPDATE DAY">
           </div>

        </form>
      </div>
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> --}}
    </div>
  </div>
</div> 
@endforeach

@foreach($eventdays as $eventday)
<!-- Modal -->
<div class="modal fade" id="agendamodal{{$eventday->id}}" tabindex="-1" aria-labelledby="agendamodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="border:2px solid #222">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="text-transform: uppercase">Add Agenda For {{ $eventday->title }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('admin.event.dayagendastore')}}" enctype="multipart/form-data">
          @csrf
            <div class="form-group mt-3">
              <label>AGENDA TITLE*</label>
              <input type="text" placeholder="Day 1" class="form-control" name="title" required/>
            </div>

            <div class="form-group mt-3">
              <label>TIME*</label>
              <input type="time"  placeholder="9 AM" class="form-control" name="time" required/>
            </div>

            <div class="form-group mt-3">
              <label>VENUE*</label>
              <input type="text"  placeholder="Ground Floor" class="form-control" name="venue" required/>
            </div>

            <div class="form-group mt-3">
              <label>DURATION*</label>
              <input type="text"  placeholder="2 Hours" class="form-control" name="duration" required/>
            </div>

            <div class="form-group mt-3">
              <label>SPEAKERS</label>
              <select class="form-control" name="speakers[]" multiple>
                {{-- <option disabled>Select Speaker</option> --}}
                @foreach($speakers as $speaker)
                  <option value="{{ $speaker->id }}">{{ $speaker->title }}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group mt-3">
              {{-- Event Days ID --}}
              <input type="hidden" class="form-control" value="{{ $eventday->id }}" name="eventdays_id" required/>
              {{-- Event Id --}}
              <input type="hidden" class="form-control" value="{{$category->id}}" name="event_id" required/>
            </div>
              
            <div class="form-group mt-3">
              <input type="submit" class="btn btn-success" name="save" value="UPDATE AGENDA">
           </div>

        </form>
      </div>
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> --}}
    </div>
  </div>
</div> 
@endforeach


<!-- AGENDA EDIT Modal -->
@foreach($eventdays as $eventday)
 @foreach($eventday->agenda as $agenda)

<div class="modal fade" id="agendaeditmodal{{  $agenda->id}}" tabindex="-1" aria-labelledby="agendaeditmodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="border:2px solid #222">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="text-transform: uppercase">EDIT AGENDA <b>{{ $agenda->title }}</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('admin.event.dayagendaedit', $agenda->id  )}}" enctype="multipart/form-data">
          @csrf
            <div class="form-group mt-3">
              <label>AGENDA TITLE*</label>
              <input type="text" placeholder="Day 1" value="{{$agenda->title}}" class="form-control" name="title" required/>
            </div>

            <div class="form-group mt-3">
              <label>TIME*</label>
              <input type="time"  placeholder="9 AM" value="{{$agenda->time}}"  class="form-control" name="time" required/>
            </div>

            <div class="form-group mt-3">
              <label>VENUE*</label>
              <input type="text"  placeholder="Ground Floor" value="{{$agenda->venue}}"  class="form-control" name="venue" required/>
            </div>

            <div class="form-group mt-3">
              <label>DURATION*</label>
              <input type="text"  placeholder="2 Hours" value="{{$agenda->duration}}"  class="form-control" name="duration" required/>
            </div>

            <div class="form-group mt-3">
              <label>SPEAKERS</label>
                          {{-- @foreach($agendas as $allagenda)
                           @foreach($allagenda->speakers as $agendaspkers)
                             @if($agenda->id == $agendaspkers->agenda_id)
                              @foreach($eventspeakers as $eventspeak)
                               @if($agendaspkers->speaker_id == $eventspeak->id)
                                <img title="{{ $eventspeak->title }}" src="{{url('storage/speaker',$eventspeak->image_name)}}" class="img-fluid rounded-circle" width="20px;" />
                              
                               @endif
                              @endforeach
                             @endif
                           @endforeach
                          @endforeach --}}
              <select class="form-control" name="speakers[]" multiple>
                {{-- <option disabled>Select Speaker</option> --}}
                {{-- @foreach($speakers as $speaker) --}}
                          @foreach($agendas as $allagenda)
                           @foreach($allagenda->speakers as $agendaspkers)
                             @if($agenda->id == $agendaspkers->agenda_id)
                              @foreach($eventspeakers as $eventspeak)
                               @if($agendaspkers->speaker_id == $eventspeak->id)
                                <option selected value="{{ $eventspeak->id }}">{{ $eventspeak->title }}</option>

                               @endif
                              @endforeach
                             @endif
                           @endforeach
                          @endforeach
                          
                  @foreach($speakers as $speaker)
                   
                    <option value="{{ $speaker->id }}">{{ $speaker->title }}</option>
                  @endforeach
                
              </select>
            </div>
              {{-- Event Days ID --}}
              <input type="hidden" class="form-control" value="{{ $eventday->id }}" name="eventdays_id" required/>
              {{-- Event Id --}}
              <input type="hidden" class="form-control" value="{{$category->id}}" name="event_id" required/>
              
            <div class="form-group mt-3">
              <input type="submit" class="btn btn-success" name="save" value="UPDATE AGENDA">
           </div>

        </form>
      </div>
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> --}}
    </div>
  </div>
</div> 
 @endforeach
@endforeach

{{-- Event Sponsor Add --}}


<!-- Modal -->
<div class="modal fade" id="eventsponsor" tabindex="-1" aria-labelledby="eventsponsor" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="border:2px solid #222">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="text-transform: uppercase">ADD SPONSORS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('admin.event.sponsorstore')}}" enctype="multipart/form-data">
          @csrf
          
          {{-- All Category of sponosors --}}
            <div class="form-group mt-3">
              <label>SPONSOR CATEGORY</label>
              <select class="form-control" name="sponsor_category_id">
                  <option selected disabled>Select Category</option>
                @foreach($sponsorcats as $sponcat)
                  <option value="{{$sponcat->id}}">{{$sponcat->title}}<option>
                @endforeach
              </select>
            </div>

          {{-- All Sponsor Logos --}}
            <div class="form-group mt-3">
              <label>SPONSORS</label>
              <select class="form-control" name="sponsor_id[]" multiple>
                 
                   @foreach($sponsors as $sponsor)
                     <option value="{{$sponsor->id}}">{{$sponsor->title}}<option>
                   @endforeach
              </select>
            </div>

          

            <div class="form-group mt-3">
              {{-- Event Id --}}
              <input type="hidden" class="form-control" value="{{$category->id}}" name="event_id" required/>
            </div>
              
            <div class="form-group mt-3">
              <input type="submit" class="btn btn-success" name="save" value="ADD SPONSORS">
           </div>

        </form>
      </div>
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> --}}
    </div>
  </div>
</div> 



</main>
@endsection

