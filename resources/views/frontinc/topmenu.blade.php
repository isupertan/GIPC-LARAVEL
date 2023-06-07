<div class="d-flex justify-content-end top-most-header-link">
    @foreach ($Topmenu as $item)
        <a href="{{route('blog', $item->page->slug)}}">{{$item->page->title}}</a>
    @endforeach
</div>