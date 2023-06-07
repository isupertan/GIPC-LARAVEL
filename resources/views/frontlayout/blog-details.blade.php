@extends('front_layout_two')
@section('title',  $blog->meta_title)
@section('description',  $blog->description)
@section('bodycontent')

{{-- @if (count($blogs) > 0)
    @foreach ($blogs as $blog) --}}

<div class="row">
    <div class="col-lg-12 blog-details-page">
      <div class="container ">
        
        <!-- Title  -->
        <h1>{{$blog->title}}</h1>
        <br />
        <img src="{{url('storage/blogs/'.$blog->image_name)}}" />
        <br />

        <p class="comment-count"><i class="fa fa-comments"></i>&nbsp;&nbsp;0 Comments</p>

        {{-- <h2>Future of online shopping in the UK</h2> --}}
        

        <p>{!! $blog->description !!}</p>

        
       <p class="share-box">
         <strong>Share: </strong>
         <a href="#" class="facebook-share"><i class="fa fa-facebook"></i></a>
         <a href="#" class="linkedin-share"><i class="fa fa-linkedin"></i></a>
         <a href="#" class="twitter-share"><i class="fa fa-twitter"></i></a>
       </p>
       <br /><br />
       <img src="./assets/img/47c4bdc084d481719350bfe853bfda26.png" class="img-avatar" />
       <br /><br />
       <h2 class="fw-normal">Leave a Reply</h2>
       <p>Your email address will not be published. Required fields are marked *</p>

       <form class="comment-form">
         <div class="form-group">
           <label>Comment</label>
           <textarea rows="4"></textarea>
         </div>

         <div class="form-group">
           <label>Name</label>
           <input type="text" name="" />
         </div>

         <div class="form-group">
           <label>Email</label>
           <input type="email" name="" />
         </div>

         <div class="form-group">
           <label>Website</label>
           <input type="text" name="" />
         </div>

         <div class="form-group d-flex align-items-center">
           <input type="checkbox" name="" />
           <label class="no-margin">Save my name, email, and website in this browser for the next time I comment.</label>
         </div>

         <div class="form-group">
           <input type="submit" name="" value="Post Comment" />
         </div>
       </form>

       <br /><br />


      </div>
    </div>
  </div>
        
  {{-- @endforeach
  @endif --}}
  @endsection