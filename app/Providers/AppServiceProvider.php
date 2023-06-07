<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        
      
        View::composer('frontinc.social',       '\App\Http\View\Composers\SocialComposer');
        View::composer('frontinc.footertext',   '\App\Http\View\Composers\FooterComposer');
        View::composer('frontinc.footermenu',   '\App\Http\View\Composers\FooterwidgetComposer');
        View::composer('frontinc.sitelogo',     '\App\Http\View\Composers\LogoComposer');
        View::composer('frontinc.headerjumbo',  '\App\Http\View\Composers\HeaderjumboComposer');
        View::composer('frontinc.topmenu',      '\App\Http\View\Composers\TopmenuComposer');
    }
}
