<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Panel</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{asset('')}}assets2/css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" 
        integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />

        <style>
            .image-conatiner-gallery{
                width: 350px;
                height: 350px;
                overflow: hidden;
                border:5px solid #222;
            }
            .image-conatiner-gallery img{
                position: absolute;
                width: auto;
                height: auto;
                max-width: 230px;
                max-height: 230px;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
            }
        </style>
    </head>

    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="{{route('admin.dashboard')}}">GIPC</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" 
               id="sidebarToggle" href="#!"><i class="fas fa-bars"></i>
            </button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
             
            </form>
            <!-- Navbar-->
             
             
<!--             {{-- {{ request()->session()->get('$LoggedUser') }} --}}-->
         
            
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" 
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
        
                        <i class="fas fa-user fa-fw"></i> {{ session('LoggesUsername') }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                      <a href="{{ route('admin.logout') }}" 
                      class="btn btn-info" 
                      style="background: transparent; 
                             color:#222;border:none;
                             text-align:center">
                            <b>Logout</b>
                      </a>
                    </ul>
                </li>
            </ul>
           
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            {{-- <div class="sb-sidenav-menu-heading">Core</div> --}}
                            <a class="nav-link" href="{{route('admin.dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            {{-- POST / PAGE --}}
                            <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" 
                               data-bs-target="#collapseNestedPosts" 
                               aria-expanded="false" aria-controls="collapseLayouts">

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseNestedPosts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('admin.npost.add')}}">Add</a>
                                    <a class="nav-link" href="{{route('admin.npost')}}">List</a>
                                </nav>
                            </div>    -->
                             {{-- MEDIA --}}
                             <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" 
                             data-bs-target="#Filemanager" 
                             aria-expanded="false" aria-controls="collapseLayouts">

                              <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                              Media
                              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                          </a>
                          <div class="collapse" id="Filemanager" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                              <nav class="sb-sidenav-menu-nested nav">
                                  <a class="nav-link" href="{{route('admin.filemanager')}}">Filemanager</a>
                                 
                              </nav>
                          </div>  -->
  


                            {{-- Doctor Category --}}
{{-- 
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" 
                               data-bs-target="#Doccat" 
                               aria-expanded="false" aria-controls="collapseLayouts">

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Doctor Category
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="Doccat" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('admin.doctor.category.add')}}">Add</a>
                                    <a class="nav-link" href="{{route('admin.doctor.category')}}">List</a>
                                </nav>
                            </div>     --}}
                        {{-- DOCTOR LIST --}}

                            {{-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" 
                                data-bs-target="#Doclist" 
                                aria-expanded="false" aria-controls="collapseLayouts">

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Doctor List
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="Doclist" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('admin.doctor.add')}}">Add</a>
                                    <a class="nav-link" href="{{route('admin.doctor')}}">List</a>
                                </nav>
                            </div>  --}}


                            {{-- SERVICES --}}
                            {{-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" 
                            data-bs-target="#collapseServ" 
                            aria-expanded="false" aria-controls="collapseLayouts">

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Service
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseServ" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('admin.service.add')}}">Add</a>
                                    <a class="nav-link" href="{{route('admin.service')}}">List</a>
                                </nav>
                            </div>     --}}

                            {{-- GALLERY --}}
                            {{-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" 
                            data-bs-target="#collapseGal" 
                            aria-expanded="false" aria-controls="collapseLayouts">

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Gallery
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseGal" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('admin.gallery.add')}}">Add</a>
                                    <a class="nav-link" href="{{route('admin.gallery')}}">List</a>
                                </nav>
                            </div> --}}

                            {{-- Category --}}
                            {{-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" 
                            data-bs-target="#collapseCats" 
                            aria-expanded="false" aria-controls="collapseLayouts">

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Package Category
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseCats" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('admin.category.add')}}">Add</a>
                                    <a class="nav-link" href="{{route('admin.category')}}">List</a>
                                </nav>
                            </div>   --}}
                            {{-- Package --}}
                            {{-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" 
                               data-bs-target="#collapseproduct" 
                               aria-expanded="false" aria-controls="collapseLayouts">

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Package
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseproduct" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('admin.product.add')}}">Add</a>
                                    <a class="nav-link" href="{{route('admin.product')}}">List</a>
                                </nav>
                            </div>    --}}
                            {{-- Blogs Category --}}
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" 
                               data-bs-target="#collapseblogcat" 
                               aria-expanded="false" aria-controls="collapseLayouts">

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Blog Category
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseblogcat" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('admin.blogcategory.add')}}">Add</a>
                                    <a class="nav-link" href="{{route('admin.blogcategory')}}">List</a>
                                </nav>
                            </div> 
                            {{-- Blogs --}}
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" 
                               data-bs-target="#collapseblog" 
                               aria-expanded="false" aria-controls="collapseLayouts">

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Blogs
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseblog" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('admin.blog.add')}}">Add</a>
                                    <a class="nav-link" href="{{route('admin.blog')}}">List</a>
                                </nav>
                            </div> 
                            {{-- PAST EVENTs --}}
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" 
                               data-bs-target="#pastevents" 
                               aria-expanded="false" aria-controls="collapseLayouts">

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Past Events
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pastevents" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('admin.pastevent.add')}}">Add</a>
                                    <a class="nav-link" href="{{route('admin.pastevent')}}">List</a>
                                </nav>
                            </div> 
                            {{--  EVENTs --}}
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" 
                               data-bs-target="#upcomingevent" 
                               aria-expanded="false" aria-controls="collapseLayouts">

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Events
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="upcomingevent" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('admin.event.add')}}">Add</a>
                                    <a class="nav-link" href="{{route('admin.event')}}">List</a>
                                </nav>
                            </div> 
                            {{-- speaker --}}
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" 
                               data-bs-target="#speaker" 
                               aria-expanded="false" aria-controls="collapseLayouts">

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Speaker
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="speaker" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('admin.speaker.add')}}">Add</a>
                                    <a class="nav-link" href="{{route('admin.speaker')}}">List</a>
                                </nav>
                            </div> 
                            {{-- Sponsors --}}
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" 
                               data-bs-target="#sponsor" 
                               aria-expanded="false" aria-controls="collapseLayouts">

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Sponsor
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="sponsor" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    {{-- <a class="nav-link" href="{{route('admin.sponsor.add')}}">Add</a> --}}
                                    <a class="nav-link" href="{{route('admin.sponsor')}}">List</a>
                                    <a class="nav-link" href="{{route('admin.sponsorcats')}}">Category</a>
                                </nav>
                            </div> 
                            {{-- Membership --}}
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" 
                               data-bs-target="#membership" 
                               aria-expanded="false" aria-controls="collapseLayouts">

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Membership
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="membership" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    {{-- <a class="nav-link" href="{{route('admin.sponsor.add')}}">Add</a> --}}
                                    <a class="nav-link" href="{{route('admin.membership')}}">Members</a>
                                    <a class="nav-link" href="{{route('admin.membership.planlist')}}">Plan</a>
                                </nav>
                            </div> 
                            {{-- Home Page Slider  --}}
                                                        
                            {{-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" 
                            data-bs-target="#homeslider" 
                            aria-expanded="false" aria-controls="collapseLayouts">

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Home Slider
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="homeslider" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('admin.homeslider.add')}}">Add Slider</a>
                                    <a class="nav-link" href="{{route('admin.homeslider')}}">Slider List</a>
                                </nav>
                            </div>   --}}
                            {{-- Equipment   --}}
                                                        
                            {{-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" 
                            data-bs-target="#equipments" 
                            aria-expanded="false" aria-controls="collapseLayouts">

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               Equipment
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="equipments" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('admin.equipments.add')}}">Add</a>
                                    <a class="nav-link" href="{{route('admin.equipments')}}">List</a>
                                </nav>
                            </div>   --}}
                            {{-- Ongoing Offer  --}}
                                                        
                            {{-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" 
                            data-bs-target="#OngoingOffers" 
                            aria-expanded="false" aria-controls="collapseLayouts">

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Ongoing Offer
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="OngoingOffers" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('admin.ongoingoffer.add')}}">Add Offer</a>
                                    <a class="nav-link" href="{{route('admin.ongoingoffer')}}">Offer List</a>
                                </nav>
                            </div>  --}}
                             
                            {{-- TESTIMONIALS --}}
                            <a class="nav-link collapsed" href="{{route('admin.testimonial')}}" data-bs-toggle="collapse" 
                               data-bs-target="#testimonials" 
                               aria-expanded="false" aria-controls="collapseLayouts">

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Testimonials
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="testimonials" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                              <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('admin.testimonial.add')}}">Add</a>
                                <a class="nav-link" href="{{route('admin.testimonial')}}">List</a>
                              </nav>
                            </div>    
                            {{-- UkForm --}}
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" 
                               data-bs-target="#Ukform" 
                               aria-expanded="false" aria-controls="collapseLayouts">

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Forms
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="Ukform" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                              <nav class="sb-sidenav-menu-nested nav">
                                    {{-- <a class="nav-link" href="{{route('admin.blog.add')}}">Add</a> --}}
                                {{-- <a class="nav-link" href="{{route('admin.feedbackform')}}">Feedback Form</a>
                                <a class="nav-link" href="{{route('admin.appointment')}}">Appointment Form</a> --}}
                                <a class="nav-link" href="{{route('admin.contact')}}">Contact Form</a>
                              </nav>
                            </div>    
                            {{-- ADMIN DETAILS --}}
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" 
                               data-bs-target="#admin" 
                               aria-expanded="false" aria-controls="collapseLayouts">

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Admin
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="admin" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('admin.userlist.add')}}">Add</a>
                                    <a class="nav-link" href="{{route('admin.userlist')}}">List</a>
                                </nav>
                            </div>   

                             {{-- SETTING --}}
                             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" 
                             data-bs-target="#Setting" 
                             aria-expanded="false" aria-controls="collapseLayouts">

                              <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                              Setting
                              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                          </a>
                          <div class="collapse" id="Setting" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                              <nav class="sb-sidenav-menu-nested nav">
                                  <a class="nav-link" href="{{route('admin.sitesetting')}}">Site Setting</a>
                                  
                              </nav>
                          </div> 
                          <div class="sb-sidenav-collapse-arrow">
                          
                              <a class="nav-link" href="{{ url('/clear-cache') }}">Clear Cache</a>
                        </div>                             
                         
                           
                           
                        </div>
                    </div>
                   
                </nav>
            </div>

            <div id="layoutSidenav_content">
                @include('alert.messages')
                @yield('bodypart')
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('')}}assets2/js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" 
        integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
        <script src="{{asset('')}}assets2/js/datatables-simple-demo.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
         crossorigin="anonymous"></script>
         <script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/ckeditor.js"></script>
         <script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/adapters/jquery.js"></script>

         <script src="{{asset('')}}vendor/laravel-filemanager/js/stand-alone-button.js"></script>
       
        <script>
            $(document).ready(function () {
                $('select').selectize({
                    sortField: 'text'
                });
            });
        </script>
       


        <script>
            var route_prefix = "/filemanager";
       </script>


         <script>
            $('textarea').ckeditor({
              height: 100,
              filebrowserImageBrowseUrl: route_prefix + '?type=Images',
              filebrowserImageUploadUrl: route_prefix + '/upload?type=Images&_token={{csrf_token()}}',
              filebrowserBrowseUrl: route_prefix + '?type=Files',
              filebrowserUploadUrl: route_prefix + '/upload?type=Files&_token={{csrf_token()}}'
            });
          </script>
          <script>
                $('#lfm').filemanager('image', {prefix: route_prefix});
                // $('#lfm').filemanager('file', {prefix: route_prefix});
                $('.alert').alert();
                $(".alert").alert('close');
          </script>
            <script>
                $(document).ready(function() {
                    $(".toast").toast('show');
                });
              </script>
              
    </body>
</html>
