<?php

namespace App\Http\View\Composers;

use App\Models\Widget;
use App\Models\Footer;
use Illuminate\View\View;

class FooterwidgetComposer
{
   
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('Footerwidget', Widget::all());
        $view->with('Footeritem', Footer::all());
    }
}