<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\FrontPagesController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\UkFomrController;
use App\Http\Controllers\FeedbackformController;
use App\Http\Controllers\AdminPagesController;
use App\Http\Controllers\HomeSliderController;
use App\Http\Controllers\EquipmentDetailsController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\OngoingOffersController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\PastEventsController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\EventDayAgendaController;
use App\Http\Controllers\EventDayController;
use App\Http\Controllers\SpeakersController;
use App\Http\Controllers\MembershipPlanController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\SponsorsController;
use App\Http\Controllers\EventSponsorsController;
use App\Http\Controllers\SponsorsCategoryController;
use App\Http\Controllers\post\NestedPostController;
use App\Http\Controllers\products\CategoryController;
use App\Http\Controllers\products\ProductController;
use App\Http\Controllers\Doctors\DoctorCategoryController;
use App\Http\Controllers\Doctors\DoctorController;
use App\Http\Controllers\AppointmentDoctorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/clear-cache', function(){
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:clear');
    $exitCode =  Artisan::call('storage:link', [] );
    return back()->with('success','Cache Cleared') ;
});
//Login Registration AUTHENTICATION

Route::get('/admin/login', [UserAuthController::class, 'index'])->name('admin.login')->middleware('AlreadyLoggedIn');
Route::post('admin/check', [UserAuthController::class, 'check'])->name('admin.check')->middleware('AlreadyLoggedIn');
//Front End Pages

Route::get('/', [FrontPagesController::class, 'index'])->name('home');
Route::get('doctor-list', [FrontPagesController::class, 'doctor_list'])->name('doctor-list');
Route::get('/doctor-view/{id}', [DoctorController::class, 'show'])->name('doctor-view');
Route::get('/package-view/{id}', [ProductController::class, 'show'])->name('package-view');
Route::get('/about-us', [FrontPagesController::class, 'about'])->name('about-us');
Route::get('/membership', [FrontPagesController::class, 'membership'])->name('membership');
Route::get('/how-it-works', [FrontPagesController::class, 'howitworks'])->name('how-it-works');
Route::get('/blog', [FrontPagesController::class, 'blog'])->name('blogs');
Route::get('/blog/{slug}', [FrontPagesController::class, 'blogslug'])->name('blog');
Route::get('/events', [FrontPagesController::class, 'events'])->name('events');
Route::get('/events/{slug}', [FrontPagesController::class, 'eventsdetails'])->name('eventsdetails');


Route::get('/upcomingevent/{id}/{slug}', [FrontPagesController::class, 'upcomingevent'])->name('upcomingevent');
Route::get('/upcomingevent/agenda/{id}/{slug}', [FrontPagesController::class, 'upcomingeventagenda'])->name('upcomingeventagenda');
Route::get('/upcomingevent/speakers/{id}/{slug}', [FrontPagesController::class, 'upcomingeventspeaker'])->name('upcomingeventspeaker');



Route::get('/contact-us', [FrontPagesController::class, 'contact'])->name('contact-us');
Route::get('/membershiplogin', [FrontPagesController::class, 'membershiplogin'])->name('membershiplogin');
Route::get('/services', [FrontPagesController::class, 'services'])->name('services');


Route::get('/services/cardiology', [FrontPagesController::class, 'cardiology'])->name('cardiology');
Route::get('/services/radiology', [FrontPagesController::class, 'radiology'])->name('radiology');
Route::get('/services/neurology', [FrontPagesController::class, 'neurology'])->name('neurology');
Route::get('/services/sugar-clinic', [FrontPagesController::class, 'sugarclinic'])->name('sugarclinic');
Route::get('/services/dental-clinic', [FrontPagesController::class, 'dentalclinic'])->name('dentalclinic');

Route::get('/services/diet-consultation', [FrontPagesController::class, 'dietconsultation'])->name('dietconsultation');
Route::get('/services/derma-care', [FrontPagesController::class, 'dermacare'])->name('dermacare');
Route::get('/services/pediatric-care', [FrontPagesController::class, 'pediatriccare'])->name('pediatriccare');
Route::get('/services/physiotherapy', [FrontPagesController::class, 'physiotherapy'])->name('physiotherapy');
Route::get('/services/doctor-consultation', [FrontPagesController::class, 'doctorconsultation'])->name('doctorconsultation');
Route::get('/services/auidomentry', [FrontPagesController::class, 'auidomentry'])->name('auidomentry');
Route::get('/services/endoscopy', [FrontPagesController::class, 'endoscopy'])->name('endoscopy');
Route::get('/services/colonoscopy', [FrontPagesController::class, 'colonoscopy'])->name('colonoscopy');
Route::get('/services/sigmoidoscopy', [FrontPagesController::class, 'sigmoidoscopy'])->name('sigmoidoscopy');
Route::get('/services/pft', [FrontPagesController::class, 'pft'])->name('pft');

// SUb Pages cardiology
Route::get('/services/cardiology/abp-minitoring', [FrontPagesController::class, 'abpmonitoring'])->name('abpmonitoring');
Route::get('/services/cardiology/ecg', [FrontPagesController::class, 'ecg'])->name('ecg');
Route::get('/services/cardiology/echo', [FrontPagesController::class, 'echo'])->name('echo');
Route::get('/services/cardiology/holter', [FrontPagesController::class, 'holter'])->name('holter');
Route::get('/services/cardiology/tmt', [FrontPagesController::class, 'tmt'])->name('tmt');

// SUb Pages Radiology
Route::get('/services/radiology/ct-scan', [FrontPagesController::class, 'ctscan'])->name('ctscan');
Route::get('/services/radiology/dental-opg', [FrontPagesController::class, 'dentalopg'])->name('dentalopg');
Route::get('/services/radiology/usg', [FrontPagesController::class, 'usg'])->name('usg');
Route::get('/services/radiology/x-ray-digital', [FrontPagesController::class, 'xraydigital'])->name('xraydigital');

// SUb Pages neurology
Route::get('/services/neurology/eeg', [FrontPagesController::class, 'eeg'])->name('eeg');
Route::get('/services/neurology/emg', [FrontPagesController::class, 'emg'])->name('emg');
Route::get('/services/neurology/ncv', [FrontPagesController::class, 'ncv'])->name('ncv');

// SUb Pages Sugar-clinic
Route::get('/services/sugar-clinic/podiascan', [FrontPagesController::class, 'podiascan'])->name('podiascan');
Route::get('/services/sugar-clinic/vision-check', [FrontPagesController::class, 'visioncheck'])->name('visioncheck');



Route::get('/homeservices', [FrontPagesController::class, 'homeservices'])->name('homeservices');
Route::get('/24x7-pharmacy', [FrontPagesController::class, 'twentypharma'])->name('twentypharma');
Route::get('/project-list', [FrontPagesController::class, 'project_list'])->name('project-list');
Route::get('/project-details/{id}', [ProjectController::class, 'show'])->name('project-details');
Route::get('/gallery', [FrontPagesController::class, 'gallery'])->name('gallery');
Route::get('/contact', [FrontPagesController::class, 'contact'])->name('contact');
Route::get('/feedback', [FrontPagesController::class, 'feedback'])->name('feedback');
Route::post('/contact', [ContactFormController::class, 'store'])->name('contact.store');
Route::post('/feedback', [FeedbackformController::class, 'store'])->name('feedback.store');
Route::get('/terms', [FrontPagesController::class, 'terms'])->name('terms');
Route::get('/privacy', [FrontPagesController::class, 'privacy'])->name('privacy');
Route::get('/refund', [FrontPagesController::class, 'refund'])->name('refund');
Route::get('/health-package', [FrontPagesController::class, 'healthpackage'])->name('healthpackage');
// Route::get('/{slug}', [FrontPagesController::class, 'blogslug'])->name('blog');
Route::get('/shop/{slug}', [FrontPagesController::class, 'shopurl'])->name('front.shop');
Route::get('/product-category/{slug}', [FrontPagesController::class, 'category_prod'])->name('category');
Route::get('/store', [FrontPagesController::class, 'shoppage'])->name('front.shoplisting');
Route::get('product/search', [FrontPagesController::class, 'get_search'])->name('front.search');

// Route::get('/{slug}', [FrontPagesController::class, 'postslug'])->name('post');

//SUBMIT UKFORM
Route::post('/ukform/create', [UkFomrController::class, 'store'])->name('ukform.store');
Route::post('/appointment/create', [AppointmentDoctorController::class, 'store'])->name('appointment.store');

//Donation Page

// Route::get('/payment-initiate', [PaymentController::class, 'index'])->name('donate');
// Route::post('/payment-initiate-request', [PaymentController::class, 'Initiate'])->name('payment-initiate-request');
// Route::post('/payment-complete', [PaymentController::class, 'Complete'])->name('payment-complete');





Route::prefix('admin')->group(function(){

    //DASHBOARD
    Route::get('/dashboard', [AdminPagesController::class, 'index'])->name('admin.dashboard')->middleware('IsLogged');
    //Filemanager
    Route::get('/filemanager', [AdminPagesController::class, 'filemanager'])->name('admin.filemanager')->middleware('IsLogged');

    //Service
   
    Route::get('/service/create', [AdminServiceController::class, 'create'])->name('admin.service.add')->middleware('IsLogged');
    Route::post('/service/create', [AdminServiceController::class, 'store'])->name('admin.service.store')->middleware('IsLogged');
    Route::get('/service', [AdminServiceController::class, 'index'])->name('admin.service')->middleware('IsLogged');
    Route::get('/service/edit/{id}', [AdminServiceController::class, 'edit'])->name('admin.service.edit')->middleware('IsLogged');
    Route::post('/service/update/{id}', [AdminServiceController::class, 'update'])->name('admin.service.update')->middleware('IsLogged');
    Route::delete('/service/destroy/{id}', [AdminServiceController::class, 'destroy'])->name('admin.service.destroy')->middleware('IsLogged');

    //Projects
    Route::get('/project/create', [ProjectController::class, 'create'])->name('admin.project.add')->middleware('IsLogged');
    Route::post('/project/create', [ProjectController::class, 'store'])->name('admin.project.store')->middleware('IsLogged');
    Route::get('/project', [ProjectController::class, 'index'])->name('admin.project')->middleware('IsLogged');
    Route::get('/project/edit/{id}', [ProjectController::class, 'edit'])->name('admin.project.edit')->middleware('IsLogged');
    Route::post('/project/update/{id}', [ProjectController::class, 'update'])->name('admin.project.update')->middleware('IsLogged');
    Route::delete('/project/destroy/{id}', [ProjectController::class, 'destroy'])->name('admin.project.destroy')->middleware('IsLogged');


    //Image Gallery
    Route::get('/gallery/create', [GalleryController::class, 'create'])->name('admin.gallery.add')->middleware('IsLogged');
    Route::post('/gallery/create', [GalleryController::class, 'store'])->name('admin.gallery.store')->middleware('IsLogged');
    Route::get('/gallery', [GalleryController::class, 'index'])->name('admin.gallery')->middleware('IsLogged');
    Route::delete('/gallery/destroy/{id}', [GalleryController::class, 'destroy'])->name('admin.gallery.destroy')->middleware('IsLogged');

    //Donation Page
    Route::get('/txn-details', [PaymentController::class, 'TxnDetails'])->name('admin.txn-details')->middleware('IsLogged');

    //category
    Route::get('/category/create', [CategoryController::class, 'create'])->name('admin.category.add')->middleware('IsLogged');
    Route::post('/category/create', [CategoryController::class, 'store'])->name('admin.category.store')->middleware('IsLogged');
    Route::get('/category', [CategoryController::class, 'index'])->name('admin.category')->middleware('IsLogged');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit')->middleware('IsLogged');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('admin.category.update')->middleware('IsLogged');
    Route::delete('/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy')->middleware('IsLogged');   

    //Blog category
    Route::get('/blogcategory/create', [BlogCategoryController::class, 'create'])->name('admin.blogcategory.add')->middleware('IsLogged');
    Route::post('/blogcategory/create', [BlogCategoryController::class, 'store'])->name('admin.blogcategory.store')->middleware('IsLogged');
    Route::get('/blogcategory', [BlogCategoryController::class, 'index'])->name('admin.blogcategory')->middleware('IsLogged');
    Route::get('/blogcategory/edit/{id}', [BlogCategoryController::class, 'edit'])->name('admin.blogcategory.edit')->middleware('IsLogged');
    Route::post('/blogcategory/update/{id}', [BlogCategoryController::class, 'update'])->name('admin.blogcategory.update')->middleware('IsLogged');
    Route::delete('/blogcategory/destroy/{id}', [BlogCategoryController::class, 'destroy'])->name('admin.blogcategory.destroy')->middleware('IsLogged');  

    //TESTIMONIAL
    Route::get('/testimonial/create', [TestimonialController::class, 'create'])->name('admin.testimonial.add')->middleware('IsLogged');
    Route::post('/testimonial/create', [TestimonialController::class, 'store'])->name('admin.testimonial.store')->middleware('IsLogged');
    Route::get('/testimonial', [TestimonialController::class, 'index'])->name('admin.testimonial')->middleware('IsLogged');
    Route::get('/testimonial/edit/{id}', [TestimonialController::class, 'edit'])->name('admin.testimonial.edit')->middleware('IsLogged');
    Route::post('/testimonial/update/{id}', [TestimonialController::class, 'update'])->name('admin.testimonial.update')->middleware('IsLogged');
    Route::get('/testimonial/destroy/{id}', [TestimonialController::class, 'destroy'])->name('admin.testimonial.destroy')->middleware('IsLogged');  

    //PAST EVENTS
    Route::get('/pastevent/create', [PastEventsController::class, 'create'])->name('admin.pastevent.add')
    ->middleware('IsLogged');
    Route::post('/pastevent/create', [PastEventsController::class, 'store'])->name('admin.pastevent.store')
    ->middleware('IsLogged');
    Route::get('/pastevent', [PastEventsController::class, 'index'])->name('admin.pastevent')
    ->middleware('IsLogged');
    Route::get('/pastevent/edit/{id}', [PastEventsController::class, 'edit'])->name('admin.pastevent.edit')
    ->middleware('IsLogged');
    Route::post('/pastevent/update/{id}', [PastEventsController::class, 'update'])->name('admin.pastevent.update')
    ->middleware('IsLogged');
    Route::delete('/pastevent/destroy/{id}', [PastEventsController::class, 'destroy'])->name('admin.pastevent.destroy')
    ->middleware('IsLogged');    
    Route::delete('/pasteventgallery/destroy/{id}', [PastEventsController::class, 'destroygallery'])
    ->name('admin.pasteventgallery.destroy')
    ->middleware('IsLogged');


    //EVENTS
    Route::get('/event/create', [EventsController::class, 'create'])->name('admin.event.add')
    ->middleware('IsLogged');
    Route::post('/event/create', [EventsController::class, 'store'])->name('admin.event.store')
    ->middleware('IsLogged');
    Route::get('/event', [EventsController::class, 'index'])->name('admin.event')
    ->middleware('IsLogged');
    Route::get('/event/edit/{id}', [EventsController::class, 'edit'])->name('admin.event.edit')
    ->middleware('IsLogged');
    Route::post('/event/update/{id}', [EventsController::class, 'update'])->name('admin.event.update')
    ->middleware('IsLogged');
    Route::delete('/event/destroy/{id}', [EventsController::class, 'destroy'])->name('admin.event.destroy')
    ->middleware('IsLogged');   

    //Event Day 
    Route::post('/event/daycreate', [EventDayController::class, 'store'])->name('admin.event.daystore')
    ->middleware('IsLogged');
        
    Route::get('/event/destroyday/{id}', [EventDayController::class, 'destroy'])->name('admin.event.destroyday')
    ->middleware('IsLogged');  

    Route::post('/event/eventdayupdate/{id}', [EventDayController::class, 'update'])->name('admin.event.dayedit')
    ->middleware('IsLogged');

    //AGENDA dayagendastore  
    Route::post('/event/dayagendacreate', [EventDayAgendaController::class, 'store'])->name('admin.event.dayagendastore')
    ->middleware('IsLogged');
    Route::post('/event/agendaupdate/{id}', [EventDayAgendaController::class, 'update'])->name('admin.event.dayagendaedit')
    ->middleware('IsLogged');

    //Add sponsor to event sponsorstore   
    Route::post('/event/sponsorcreate', [EventSponsorsController::class, 'store'])->name('admin.event.sponsorstore')
    ->middleware('IsLogged');    
    Route::get('/event/destroyeventsponsor/{id}', [EventSponsorsController::class, 'destroy'])->name('admin.event.destroyeventsponsor')
    ->middleware('IsLogged');

    //SPEAKER

    Route::get('/speaker/create', [SpeakersController::class, 'create'])->name('admin.speaker.add')
    ->middleware('IsLogged');
    Route::post('/speaker/create', [SpeakersController::class, 'store'])->name('admin.speaker.store')
    ->middleware('IsLogged');
    Route::get('/speaker', [SpeakersController::class, 'index'])->name('admin.speaker')
    ->middleware('IsLogged');
    Route::get('/speaker/edit/{id}', [SpeakersController::class, 'edit'])->name('admin.speaker.edit')
    ->middleware('IsLogged');
    Route::post('/speaker/update/{id}', [SpeakersController::class, 'update'])->name('admin.speaker.update')
    ->middleware('IsLogged');
    Route::delete('/speaker/destroy/{id}', [SpeakersController::class, 'destroy'])->name('admin.speaker.destroy')
    ->middleware('IsLogged');     


    //SPONSORS

    Route::get('/sponsor/create', [SponsorsController::class, 'create'])->name('admin.sponsor.add')
    ->middleware('IsLogged');
    Route::post('/sponsor/create', [SponsorsController::class, 'store'])->name('admin.sponsor.store')
    ->middleware('IsLogged');
    Route::get('/sponsor', [SponsorsController::class, 'index'])->name('admin.sponsor')
    ->middleware('IsLogged');
    Route::get('/sponsor/edit/{id}', [SponsorsController::class, 'edit'])->name('admin.sponsor.edit')
    ->middleware('IsLogged');
    Route::post('/sponsor/update/{id}', [SponsorsController::class, 'update'])->name('admin.sponsor.update')
    ->middleware('IsLogged');
    Route::delete('/sponsor/destroy/{id}', [SponsorsController::class, 'destroy'])->name('admin.sponsor.destroy')
    ->middleware('IsLogged');     

    //sponsor category
    Route::get('/sponsorcats', [SponsorsCategoryController::class, 'index'])->name('admin.sponsorcats')
    ->middleware('IsLogged');
    Route::post('/sponsorcats/create', [SponsorsCategoryController::class, 'store'])->name('admin.sponsor.storecats')->middleware('IsLogged');
    Route::post('/sponsor/updatecats/{id}', [SponsorsCategoryController::class, 'update'])->name('admin.sponsor.updatecats')
    ->middleware('IsLogged'); 
    Route::get('/sponsor/destroycats/{id}', [SponsorsCategoryController::class, 'destroy'])->name('admin.sponsor.destroycats')
    ->middleware('IsLogged'); 


    //membership plan
    Route::get('/membership/plancreate', [MembershipPlanController::class, 'create'])->name('admin.membership.planadd')
    ->middleware('IsLogged');
    Route::post('/membership/plancreate', [MembershipPlanController::class, 'store'])->name('admin.membership.planstore')
    ->middleware('IsLogged');
    Route::get('/membershipplan', [MembershipPlanController::class, 'index'])->name('admin.membership.planlist')
    ->middleware('IsLogged');
    Route::get('/membership/planedit/{id}', [MembershipPlanController::class, 'edit'])->name('admin.membership.planedit')
    ->middleware('IsLogged');
    Route::post('/membership/planupdate/{id}', [MembershipPlanController::class, 'update'])->name('admin.membership.planupdate')
    ->middleware('IsLogged'); 
    Route::get('/membership/plandestroy/{id}', [MembershipPlanController::class, 'destroy'])->name('admin.membership.plandestroy')->middleware('IsLogged');     

    //members
    Route::get('/membership/create', [MembersController::class, 'create'])->name('admin.membership.add')
    ->middleware('IsLogged');
    Route::post('/membership/create', [MembersController::class, 'store'])->name('admin.membership.store')
    ->middleware('IsLogged');
    Route::get('/membership', [MembersController::class, 'index'])->name('admin.membership')
    ->middleware('IsLogged');
    Route::get('/membership/edit/{id}', [MembersController::class, 'edit'])->name('admin.membership.edit')
    ->middleware('IsLogged');
    Route::post('/membership/update/{id}', [MembersController::class, 'update'])->name('admin.membership.update')
    ->middleware('IsLogged'); 
    Route::get('/membership/destroy/{id}', [MembersController::class, 'destroy'])->name('admin.membership.destroy')->middleware('IsLogged'); 

    //Hone slider Gallery
    Route::get('/homeslider/create', [HomeSliderController::class, 'create'])->name('admin.homeslider.add')->middleware('IsLogged');
    Route::post('/homeslider/create', [HomeSliderController::class, 'store'])->name('admin.homeslider.store')->middleware('IsLogged');
    Route::get('/homeslider', [HomeSliderController::class, 'index'])->name('admin.homeslider')->middleware('IsLogged');
    Route::delete('/homeslider/destroy/{id}', [HomeSliderController::class, 'destroy'])->name('admin.homeslider.destroy')->middleware('IsLogged');


    //Equipments
    Route::get('/equipments/create', [EquipmentDetailsController::class, 'create'])->name('admin.equipments.add')->middleware('IsLogged');
    Route::post('/equipments/create', [EquipmentDetailsController::class, 'store'])->name('admin.equipments.store')->middleware('IsLogged');
    Route::get('/equipments', [EquipmentDetailsController::class, 'index'])->name('admin.equipments')->middleware('IsLogged');
    Route::delete('/equipments/destroy/{id}', [EquipmentDetailsController::class, 'destroy'])->name('admin.equipments.destroy')->middleware('IsLogged');

    //products
    Route::get('/products/create', [ProductController::class, 'create'])
        ->name('admin.product.add')
        ->middleware('IsLogged');
    Route::post('/products/create', [ProductController::class, 'store'])
        ->name('admin.product.store')
        ->middleware('IsLogged');
    Route::get('/products', [ProductController::class, 'index'])
        ->name('admin.product')
        ->middleware('IsLogged');
    Route::get('/products/edit/{id}', [ProductController::class, 'edit'])
        ->name('admin.product.edit')
        ->middleware('IsLogged');
    Route::post('/products/update/{id}', [ProductController::class, 'update'])
        ->name('admin.product.update')
        ->middleware('IsLogged');
    Route::delete('/products/destroy/{id}', [ProductController::class, 'destroy'])
        ->name('admin.product.destroy')
        ->middleware('IsLogged');


    //OngoingOfferList

    Route::get('/ongoingoffer/create', [OngoingOffersController::class, 'create'])
        ->name('admin.ongoingoffer.add')
        ->middleware('IsLogged');
    Route::post('/ongoingoffer/create', [OngoingOffersController::class, 'store'])
        ->name('admin.ongoingoffer.store')
        ->middleware('IsLogged');
    Route::get('/ongoingoffer', [OngoingOffersController::class, 'index'])
        ->name('admin.ongoingoffer')
        ->middleware('IsLogged');
    Route::get('/ongoingoffer/edit/{id}', [OngoingOffersController::class, 'edit'])
        ->name('admin.ongoingoffer.edit')
        ->middleware('IsLogged');
    Route::post('/ongoingoffer/update/{id}', [OngoingOffersController::class, 'update'])
        ->name('admin.ongoingoffer.update')
        ->middleware('IsLogged');
    Route::delete('/ongoingoffer/destroy/{id}', [OngoingOffersController::class, 'destroy'])
        ->name('admin.ongoingoffer.destroy')
        ->middleware('IsLogged');


//    Doctor Category

    Route::get('doccategory/create', [DoctorCategoryController::class, 'create'])->name('admin.doctor.category.add')->middleware('IsLogged');
    Route::post('doccategory/create', [DoctorCategoryController::class, 'store'])->name('admin.doctor.category.store')->middleware('IsLogged');
    Route::get('doccategory', [DoctorCategoryController::class, 'index'])->name('admin.doctor.category')->middleware('IsLogged');
    Route::get('doccategory/edit/{id}', [DoctorCategoryController::class, 'edit'])->name('admin.doctor.category.edit')->middleware('IsLogged');
    Route::post('doccategory/update/{id}', [DoctorCategoryController::class, 'update'])->name('admin.doctor.category.update')->middleware('IsLogged');
    Route::delete('doccategory/destroy/{id}', [DoctorCategoryController::class, 'destroy'])->name('admin.doctor.category.destroy')->middleware('IsLogged');    
    
    //DOCTOR LIST

    Route::get('/doctors/create', [DoctorController::class, 'create'])
    ->name('admin.doctor.add')
    ->middleware('IsLogged');
    Route::post('/docotors/create', [DoctorController::class, 'store'])
    ->name('admin.doctor.store')
    ->middleware('IsLogged');
    Route::get('/doctors', [DoctorController::class, 'index'])
    ->name('admin.doctor')
    ->middleware('IsLogged');
    Route::get('/doctors/edit/{id}', [DoctorController::class, 'edit'])
    ->name('admin.doctor.edit')
    ->middleware('IsLogged');
    Route::post('/doctors/update/{id}', [DoctorController::class, 'update'])
    ->name('admin.doctor.update')
    ->middleware('IsLogged');
    Route::delete('/doctors/destroy/{id}', [DoctorController::class, 'destroy'])
    ->name('admin.doctor.destroy')
    ->middleware('IsLogged');


    //blogs
    Route::get('/blogs/create', [BlogsController::class, 'create'])
        ->name('admin.blog.add')
        ->middleware('IsLogged');
    Route::post('/blogs/create', [BlogsController::class, 'store'])
        ->name('admin.blog.store')
        ->middleware('IsLogged');
    Route::get('/blogs', [BlogsController::class, 'index'])
        ->name('admin.blog')
        ->middleware('IsLogged');
    Route::get('/blogs/edit/{id}', [BlogsController::class, 'edit'])
        ->name('admin.blog.edit')
        ->middleware('IsLogged');
    Route::post('/blogs/update/{id}', [BlogsController::class, 'update'])
        ->name('admin.blog.update')
        ->middleware('IsLogged');
    Route::delete('/blogs/destroy/{id}', [BlogsController::class, 'destroy'])
        ->name('admin.blog.destroy')
        ->middleware('IsLogged');   
    
    //NestedPosts
    Route::get('/npost/create', [NestedPostController::class, 'create'])
           ->name('admin.npost.add')
           ->middleware('IsLogged');

    Route::post('/npost/create', [NestedPostController::class, 'store'])
          ->name('admin.npost.store')
          ->middleware('IsLogged');

    Route::get('/npost', [NestedPostController::class, 'index'])
          ->name('admin.npost')
          ->middleware('IsLogged');

    Route::get('/npost/edit/{id}', [NestedPostController::class, 'edit'])
          ->name('admin.npost.edit')
          ->middleware('IsLogged');

    Route::post('/npost/update/{id}', [NestedPostController::class, 'update'])
          ->name('admin.npost.update')
          ->middleware('IsLogged');

    Route::delete('/npost/destroy/{id}', [NestedPostController::class, 'destroy'])
          ->name('admin.npost.destroy')
          ->middleware('IsLogged');

    Route::post('/upload_image', [NestedPostController::class, 'upload'])
          ->name('upload')
          ->middleware('IsLogged');

     //Nested Sub category

     Route::get('/npost/sub/{id}', [NestedPostController::class, 'subindex'])
     ->name('admin.npost.sub')
     ->middleware('IsLogged');    

     Route::get('/npost/sub/create/{id}', [NestedPostController::class, 'subcreate'])
     ->name('admin.npost.subadd')
     ->middleware('IsLogged');

     Route::post('/npost/sub/create', [NestedPostController::class, 'substore'])
     ->name('admin.npost.substore')
     ->middleware('IsLogged');

     Route::get('/npost/sub/edit/{id}', [NestedPostController::class, 'subedit'])
     ->name('admin.npost.subedit')
     ->middleware('IsLogged');

     //Get Form Details
     Route::get('/ukform', [UkFomrController::class, 'index'])
     ->name('admin.ukform')
     ->middleware('IsLogged');

     Route::get('/ukform/show/{id}', [UkFomrController::class, 'show'])
     ->name('admin.ukform.show')
     ->middleware('IsLogged');

     Route::delete('/ukform/destroy/{id}', [UkFomrController::class, 'destroy'])
     ->name('admin.ukform.destroy')
     ->middleware('IsLogged');

     //Appointment
     Route::get('/appointment', [AppointmentDoctorController::class, 'index'])
     ->name('admin.appointment')
     ->middleware('IsLogged');  
     //contact
     Route::get('/contact', [ContactFormController::class, 'index'])
     ->name('admin.contact')
     ->middleware('IsLogged');  
     
     Route::delete('/contact/destroy/{id}', [ContactFormController::class, 'destroy'])
     ->name('admin.contact.destroy')
     ->middleware('IsLogged');

    //FEEDBACK
    Route::get('/feedbackform', [FeedbackformController::class, 'index'])
    ->name('admin.feedbackform')
    ->middleware('IsLogged');  
    
    Route::delete('/feedbackform/destroy/{id}', [FeedbackformController::class, 'destroy'])
    ->name('admin.feedbackform.destroy')
    ->middleware('IsLogged');
     //users

     Route::get('/userlist', [UserAuthController::class, 'userlist'])
     ->name('admin.userlist')
     ->middleware('IsLogged');    
     Route::get('/userlist/add', [UserAuthController::class, 'create'])
     ->name('admin.userlist.add')
     ->middleware('IsLogged');    
     Route::post('/userlist/add', [UserAuthController::class, 'store'])
     ->name('admin.userlist.store')
     ->middleware('IsLogged');  
     Route::delete('/userlist/destroy/{id}', [UserAuthController::class, 'destroy'])
     ->name('admin.userlist.destroy')
     ->middleware('IsLogged');  
     Route::get('/logout', [UserAuthController::class, 'logout'])
     ->name('admin.logout')->middleware('IsLogged');

     //Menu List
     Route::get('/menu', [MenuController::class, 'index'])
     ->name('admin.menu')
     ->middleware('IsLogged');



    //main menu store

     Route::post('/menu', [MenuController::class, 'store'])
     ->name('admin.mainmenu.store')
     ->middleware('IsLogged'); 

     Route::delete('/menu/destroy/{id}', [MenuController::class, 'destroy'])
     ->name('admin.menu.destroy')
     ->middleware('IsLogged'); 
     //EDIT
   
     
     //sub post
     Route::get('/submenu/{id}', [MenuController::class, 'subindex'])
     ->name('admin.submenu')
     ->middleware('IsLogged');
     
     //footer
     Route::get('/footer', [MenuController::class, 'footer'])
     ->name('admin.footer')
     ->middleware('IsLogged');

     Route::post('/footer', [MenuController::class, 'widgetstore'])
     ->name('admin.widget.store')
     ->middleware('IsLogged');
     
     Route::post('/footermenu/store', [MenuController::class, 'footermenustore'])
     ->name('admin.footmenu.store')
     ->middleware('IsLogged');



     //widget-wise menu
     Route::get('/footer/menu/{id}', [MenuController::class, 'footermenu'])
     ->name('admin.footermenu')
     ->middleware('IsLogged');     

     
     Route::delete('/footermenu/destroy/{id}', [MenuController::class, 'footerdestroy'])
     ->name('admin.menufooterlink.destroy')
     ->middleware('IsLogged'); 
     
     Route::delete('/footerwidget/destroy/{id}', [MenuController::class, 'footerwidget'])
     ->name('admin.footerwidget.destroy')
     ->middleware('IsLogged'); 
     
     //SITE SETTING SettingController
     Route::get('/sitesetting', [SettingController::class, 'index'])
     ->name('admin.sitesetting')
     ->middleware('IsLogged');   

     //SITE SETTING SettingController
     Route::post('/sitesetting', [SettingController::class, 'store'])
     ->name('admin.sitesetting.store')
     ->middleware('IsLogged');   
     //update
     Route::post('/sitesetting/update/{id}', [SettingController::class, 'update'])
     ->name('admin.sitesetting.update')
     ->middleware('IsLogged');   
     
    //top menu

    Route::get('/topmenu', [MenuController::class, 'topmenu'])
    ->name('admin.topmenu')
    ->middleware('IsLogged');

    //delete Menu

     Route::delete('/topmenu/destroy/{id}', [MenuController::class, 'topmenudestroy'])
     ->name('admin.topmenu.destroy')
     ->middleware('IsLogged'); 


   //main menu store

    Route::post('/topmenu', [MenuController::class, 'topmenustore'])
    ->name('admin.topmenu.store')
    ->middleware('IsLogged');
    
    
    ///Export to excel  Contact
    Route::get('/exportcontact', [ContactFormController::class, 'exportcontact'])
    ->name('admin.exportcontact')
    ->middleware('IsLogged'); 

    ///Export to excel  Feedback
    Route::get('/exportfeedback', [FeedbackformController::class, 'exportfeedback'])
    ->name('admin.exportfeedback')
    ->middleware('IsLogged');

    ///Export to excel Ukform Details
    Route::get('/exportukform', [UkFomrController::class, 'exportukform'])
    ->name('admin.exportukform')
    ->middleware('IsLogged');
    


});


//editor
Route::group(['prefix' => 'laravel-filemanager',  'middleware' => ['web', 'IsLogged']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('/emalTest', function() {
  return new ContactFormMail();
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
