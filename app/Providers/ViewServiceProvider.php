<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use\App\Http\Model\UserRegister;
use\App\Http\Model\NewsList;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    { 
        View::composer('*', function($view) {
          $footer_user = UserRegister::orderBy('id', 'DESC')->get();
          // $news_data = NewsList::where('user_id', $footer_user)->get();
          return $view->with('users', $footer_user);
        });
    }
}
