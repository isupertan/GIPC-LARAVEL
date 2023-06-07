<?php

namespace App\Http\View\Composers;

use App\Models\Menu;
use App\Models\NestedPosts;
use App\Models\Topmenu;

use Illuminate\View\View;

class TopmenuComposer
{
   
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
    
        $view->with('Topmenu', Topmenu::with('page')->get());
        $view->with('Allpages', NestedPosts::all());
    }
}