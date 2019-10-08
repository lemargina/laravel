<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema; //this
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     * 
     * 
     */
	
	public function boot()
	{
		Schema::defaultStringLength(191); //this
	}
	
    

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
