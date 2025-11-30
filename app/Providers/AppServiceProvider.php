<?php

namespace App\Providers;
use App\Models\Berita;
use App\Models\Lowongan;
use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function boot()
   {
    View::share('beritas', Berita::latest()->take(3)->get());
    View::share('lowongans', Lowongan::latest()->take(3)->get());
}

 
}

