
@extends('front_layout_two')
@section('title', 'Himal Deals - Shopping Directory - Buy Goods Or Services - 1')
@section('description', 'Himal Deals is an online shopping directory. Its offer different services and goods from trusted and best vendors of the UK and Global all on one platform.')
@section('bodycontent')

<div class="row">
    <div class="col-lg-12">
      <div class="container blog-page">
        

        <h1>Blog</h1>

        <div class="row">
        @if (count($blogs) > 0)
         @foreach ($blogs as $blog)
            <div class="col-lg-6 mt- mb-3">
                <div class="blog-card">
                    <a href="{{route('blog',$blog->slug)}}" style="color: #222;text-decoration:none">  
                <img src="{{url('storage/blogs/'.$blog->image_name)}}" class="img-fluid" />
                <p class="comment-count"><i class="fa fa-comments"></i>&nbsp;&nbsp;0 Comments</p>

                <p class="blog-card-title">{{$blog->title}}</p>

                <p class="blog-card-desc">{{Str::limit(strip_tags($blog->short_description),250)}}</p>
                    </a>
                </div>
            </div>  
         @endforeach   
        @endif



        </div>



        <br /><br /><br /><br />
      </div>
    </div>
  </div>

  @endsection