<?php

namespace App\Http\View\Composers;

use App\Models\Setting;
use Illuminate\View\View;

class LogoComposer
{
   
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('Logoglobal', Setting::where('id' , 1)->first());
    }
}