<?php

namespace App\Http\View\Composers;

use App\Models\Menu;
use App\Models\NestedPosts;
use Illuminate\View\View;

class HeaderjumboComposer
{
   
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
    
        $view->with('HeaderMenu', Menu::with('page')->get());
        $view->with('HeaderMenuPages', NestedPosts::all());
    }
}