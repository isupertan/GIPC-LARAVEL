<?php

namespace App\Http\View\Composers;

use App\Models\Setting;
use Illuminate\View\View;

class FooterComposer
{
   
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('Fooertext', Setting::where('id' , 1)->first());
    }
}