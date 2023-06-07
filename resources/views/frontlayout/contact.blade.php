
@extends('front_layout_two')
@section('title', 'Himal Deals - Shopping Directory - Buy Goods Or Services - 1')
@section('description', 'Himal Deals is an online shopping directory. Its offer different services and goods from trusted and best vendors of the UK and Global all on one platform.')
@section('bodycontent')
<div class="row">
    <div class="col-lg-12">
      <div class="container">

        <h1>Contact Us</h1>
        @include('alert.messages')
        <h2 class="mt-4">Contact Us</h2>
        <p>As you know, its an affiliation website and all the sale will be deal by the vendors directly. However, if you want to contact us, then please fill the contact us page as below.</p>
        
        <br /><br />
        <form action="{{ route('contact.store') }}" method="POST" class="contact-form">
          
          @csrf
          <div class="form-group">
            <label><strong>Your Name(required)<strong></label>
            <input class="form-control" type="text" name="name" style="border: 2px solid #222" />
          </div>

          <div class="form-group">
            <label><strong>Your Email(required)<strong></label>
            <input class="form-control" type="email" name="email" style="border: 2px solid #222"/>
          </div>

          <div class="form-group">
            <label><strong>Subject<strong></label>
            <input class="form-control" type="text" name="subject" style="border: 2px solid #222"/>
          </div>

          <div class="form-group">
            <label><strong>Message<strong></label>
            <textarea rows="3"  class="form-control" style="border: 2px solid #222" name="message"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" value="send">
          </div>
        </form>

      </div>
    </div>
  </div>

  @endsection