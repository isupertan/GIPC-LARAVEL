@if(!empty($Footerwidget))
@foreach ($Footerwidget as $widget)
    

 <div class="col-lg-3">
    <h5>{{$widget->title}}</h5>

    <ul class="footer-menu">
      @foreach ($Footeritem as $item)
       @if ($item->widget_id == $widget->id)           
        <li>
          <a href="https://clk.tradedoubler.com/click?p=266696&a=2872144">{{$item->title}}</a>
        </li>
      @endif 
      @endforeach
    </ul>
  </div>
  @endforeach 
  @endif