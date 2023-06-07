<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Images;
use App\Models\Projects;
use App\Models\ServiceModel;
use App\Models\NestedPosts;
use App\Models\Categories;
use App\Models\Products;
use App\Models\Blogs;
use App\Models\BlogCategory;
use App\Models\Sponsors;
use App\Models\Speakers;
use App\Models\PastEvents;
use App\Models\PastEventGallery;
use App\Models\Events;
use App\Models\EventDay;
use App\Models\EventDayAgenda;
use App\Models\EventAgendaSpeakers;
use App\Models\EventSponsors;
use App\Models\SponsorsCategory;
use App\Models\HomeSlider;
use App\Models\Doctor\DoctorList;
use App\Models\Doctor\DoctorCategory;
use App\Models\OngoingOffers;
use App\Models\EquipmentDetails;


class FrontPagesController extends Controller
{
    //home Page
    public function index(){

        $blogs                  = Blogs::all();
        $pastevents             = PastEvents::orderBy('year','DESC')->get();
        $sponsorsitem           = Sponsors::all();
        $blogcategory           = BlogCategory::with('blogs')->get();
        $speakers               = Speakers::where('featured','1')->get();

        $ucevents               = Events::all();

        foreach($ucevents as $ucevnt){
        //   $ucevents->id;

          $eventdays              =   EventDay::with('agenda')->where('event_id', $ucevnt->id)->orderBy('id', 'DESC')->get();
          $eventsponsors          =   EventSponsors::with('sponsorcats','sponsorsfull')->where('event_id', $ucevnt->id)->get();

          $uniquetwo          =   EventAgendaSpeakers::where('event_id', $ucevnt->id )->get();
          $eventspeakerstwo   =   $uniquetwo->unique('speaker_id');

        }
        // dd($eventdays);
        // die();
        $uniqueagendas          =   EventDayAgenda::with('speakers')->get();

        $agendas                =   $uniqueagendas->unique('speakers');
        // $agendas                =   EventDayAgenda::with('speakers')->get();


        $speakers               =   Speakers::all();
        $unique                 =   Speakers::with('eventspeakers')->get();
        
        

        $eventspeakers          =   $unique->unique('title');
            // dd($eventspeakers);
            // die();
        $sponsorcats            =   SponsorsCategory::with('eventsponsorlink')->get();
        $sponsors               =   Sponsors::all();




        // dd($sponsors);


        return view('gipc.index',compact('blogs','blogcategory','pastevents','sponsorsitem','speakers','ucevents','eventdays','agendas','speakers','eventspeakers','sponsorcats','sponsors','eventsponsors','eventspeakerstwo'));
    }
    //About Page
    public function about(){
        return view('gipc.about');
    }    
    
    //Event Page
    public function events(){
        $blogs      =   Blogs::with('blogcategory')->get();
        $pastevents =   PastEvents::with('galleryimages')->orderBy('year', 'DESC')->get();
        return view('gipc.events',compact('blogs','pastevents'));
    }
    //Event Details
    public function eventsdetails($slug){
        $blogs      =   Blogs::with('blogcategory')->get();
        $event      =   PastEvents::with('galleryimages')->where('slug', $slug)->first();
        return view('gipc.events_details',compact('blogs','event'));
    }        
    //Upcoming Event Details
    public function upcomingevent($id,$slug){
        $category           =   Events::with('eventsponsor')->where(['id' => $id, 'slug' => $slug])->first();
        $eventdays          =   EventDay::with('agenda')->where('event_id', $id)->orderBy('id', 'DESC')->get();
        $agendas            =   EventDayAgenda::with('speakers')->get();
        $speakers           =   Speakers::all();
        $eventspeakers      =   Speakers::with('eventspeakers')->get();
        $sponsorcats        =   SponsorsCategory::with('eventsponsorlink')->get();
        $sponsors           =   Sponsors::all();
        $eventsponsors      =   EventSponsors::with('sponsorcats','sponsorsfull')->where('event_id', $id)->get();

        $uniquetwo          =   EventAgendaSpeakers::where('event_id', $id )->get();
        $eventspeakerstwo   =   $uniquetwo->unique('speaker_id');

        // dd($eventspeakerstwo);

        return view('gipcevent.eventhome',compact( 'category', 'eventdays', 'agendas', 'speakers', 'eventspeakers', 'sponsorcats', 'sponsors', 'eventsponsors','eventspeakerstwo'));
    }     
    // Agenda   
    public function upcomingeventagenda($id,$slug){
        $category           =   Events::with('eventsponsor')->where(['id' => $id, 'slug' => $slug])->first();
        $eventdays          =   EventDay::with('agenda')->where('event_id', $id)->orderBy('id', 'DESC')->get();
        $agendas            =   EventDayAgenda::with('speakers')->get();
        $speakers           =   Speakers::all();
        $eventspeakers      =   Speakers::with('eventspeakers')->get();
        $sponsorcats        =   SponsorsCategory::with('eventsponsorlink')->get();
        $sponsors           =   Sponsors::all();
        $eventsponsors      =   EventSponsors::with('sponsorcats','sponsorsfull')->where('event_id', $id)->get();

        $uniquetwo          =   EventAgendaSpeakers::where('event_id', $id )->get();
        $eventspeakerstwo   =   $uniquetwo->unique('speaker_id');

        // dd($eventspeakerstwo);

        return view('gipcevent.agenda',compact( 'category', 'eventdays', 'agendas', 'speakers', 'eventspeakers', 'sponsorcats', 'sponsors', 'eventsponsors','eventspeakerstwo'));
    } 
    //Spwaker       
    public function upcomingeventspeaker($id,$slug){
        $category           =   Events::with('eventsponsor')->where(['id' => $id, 'slug' => $slug])->first();
        $eventdays          =   EventDay::with('agenda')->where('event_id', $id)->orderBy('id', 'DESC')->get();
        $agendas            =   EventDayAgenda::with('speakers')->get();
        $speakers           =   Speakers::all();
        $eventspeakers      =   Speakers::with('eventspeakers')->get();
        $sponsorcats        =   SponsorsCategory::with('eventsponsorlink')->get();
        $sponsors           =   Sponsors::all();
        $eventsponsors      =   EventSponsors::with('sponsorcats','sponsorsfull')->where('event_id', $id)->get();

        $uniquetwo          =   EventAgendaSpeakers::where('event_id', $id )->get();
        $eventspeakerstwo   =   $uniquetwo->unique('speaker_id');

        // dd($eventspeakerstwo);

        return view('gipcevent.speakers',compact( 'category', 'eventdays', 'agendas', 'speakers', 'eventspeakers', 'sponsorcats', 'sponsors', 'eventsponsors','eventspeakerstwo'));
    }        
    //blog
    public function blog(){
        $blogs                  = Blogs::with('blogcategory')->get();
        $blogcategory           = BlogCategory::with('blogs')->get();
        return view('gipc.blog',compact('blogs','blogcategory'));
    }
    //Fetch Dunamic Pageblogslug

    public function blogslug($slug){

        $singleblog             = Blogs::with('blogcategory')->where('slug', $slug)->first();
        $blogs                  = Blogs::with('blogcategory')->get();
        $blogcategory           = BlogCategory::with('blogs')->get();
        return view('gipc.single-post', compact('singleblog','blogs','blogcategory'));

    }

    //doc list
    public function doctor_list(){
        $doctors    = DoctorList::with('category')->get();
        $categories = DoctorCategory::all();
        return view('apollo.doctors', compact('doctors','categories'));
    }
    //Contact Page
    public function contact(){
        $blogs                  = Blogs::with('blogcategory')->get();
        return view('gipc.contact',compact('blogs'));
    }

    //gallery Page
    public function gallery(){
        $blogs  = Blogs::with('blogcategory')->get();
        $images = PastEventGallery::all();
        // dd($images);
        // die();
        return view('gipc.gallery', compact('images','blogs'));
    }

    //memebrrship  membership
    public function membership(){
        // $blogs  = Blogs::with('blogcategory')->get();
        // $images = PastEventGallery::all();
        // // dd($images);
        // die();
        return view('gipc.membership_new');
    }
    //Feedback Form Page
    public function feedback(){
        return view('apollo.feedbackform');
    }
    //Membership Loggin
    public function membershiplogin(){
        return view('gipc.memberlogin');
    }

    //get all Product page
    public function shoppage()
    {
        $products  =   Products::all();
        return view('vetfront.product-listing', compact('products'));
    }
    //get all Product page
    public function homeservices()
    {
//        $products  =   Products::all();
        return view('apollo.home-service');
    }  
    //get all Health Pacakge Page
    public function healthpackage()
    {
        $products  =   Products::all();
        return view('apollo.health-package', compact('products'));
    }  
    public function twentypharma()
    {
//        $products  =   Products::all();
        return view('apollo.24x7-pharmacy');
    }    
    
    //Details Page

    public function shopurl($slug){
        $product     =   Products::with('category')->where('slug', $slug)->first();
        $productAll  =   Products::with('category')->get();

        // dd($product);
        return view('vetfront.product-details', compact('product','productAll'));
    }



//  =====================  V E T  W E B S I T E  E N D ============================

    //project Page
    public function project_list(){
        // $projects = Projects::all();
        return view('frontend.project',compact('projects'));
    }



    //terms
    public function terms(){
        return view('frontend.terms');
    }
    //Privacy
    public function privacy(){
        return view('frontend.privacy');
    }
    //Refund
    public function refund(){
        return view('frontend.refund');
    }
    //howitworks
    public function howitworks(){
        return view('frontlayout.howitworks');
    }



    //Fetch Dunamic Pageblogslug

    // public function blogslug($slug){

    //     $blog      = Blogs::where('slug', $slug)->first();
    //     $post      = NestedPosts::where('slug', $slug)->first();
        

    //     if ($post != ''){
    //         return view('frontlayout.post-details', compact('post'));
    //     } elseif ($blog != ''){
    //         return view('frontlayout.blog-details', compact('blog'));
    //     } else{
    //         return abort(404);
    //     }
    // }




    //fetch categorty wise prodicts
    public function category_prod($slug)
    {
        $products  =   Products::with('category')->get();
        $category  =   Categories::where('slug', $slug)->first();

        return view('frontlayout.product-listing', compact('products','category'));
    }

    //Get search Results
    public function get_search(){

        $search = request()->query('search');
         if($search != ''){
             $products = Products::where('title', 'LIKE', "%{$search}%")->get();
            //  return view('frontlayout.search-listing', compact('products'));
         } else{
            $products = Products::all();
            //  return view('frontlayout.search-listing', compact('products'));

         }

         return view('frontlayout.search-listing', compact('products'));
       
    }

    //FRONT PAGE INCLUDE PART PROVIDER



}
