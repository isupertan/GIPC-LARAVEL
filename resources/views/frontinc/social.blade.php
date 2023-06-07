@if(!empty($Socialmedia))
<div class="col-lg-3">
  <h5>Social Profiles</h5>
  <div class="fb-page" data-href="{{$Socialmedia->facebook}}" 
      data-tabs="" data-width="" data-height="300" 
      data-small-header="true" data-adapt-container-width="true" 
      data-hide-cover="true" data-show-facepile="false">
      <blockquote cite="{{$Socialmedia->facebook}}" 
      class="fb-xfbml-parse-ignore">
      <a href="{{$Socialmedia->facebook}}">
        {{$Socialmedia->name}}
      </a>
    </blockquote>
  </div>
  <br /><br />
  <h5>Social Shares</h5>
  <ul class="social-menu">
    <li>
      <a href="{{$Socialmedia->facebook}}"><i class="fa fa-facebook"></i></a>
    </li>

    <li>
      <a href="{{$Socialmedia->twitter}}"><i class="fa fa-twitter"></i></a>
    </li>

    <li>
      <a href="{{$Socialmedia->linkedin}}"><i class="fa fa-linkedin"></i></a>
    </li>

    <li>
      <a href="mailto:{{$Socialmedia->email}}"><i class="fa fa-envelope"></i></a>
    </li>

    <li>
      <a href="{{$Socialmedia->whatsapp}}"><i class="fa fa-whatsapp"></i></a>
    </li>

   
  </ul>

  {{-- SOCIAL MENU --}}

</div>
@endif