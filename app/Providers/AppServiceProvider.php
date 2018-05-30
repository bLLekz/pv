<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\View\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //


            view()->composer('layouts.app', function($view)
            {
                if (!Auth::guest())
                {
                $str=Auth::user()->name;//разбиваем на массив
                $arr_str = explode(" ", $str);//берем первые 6 элементов
                $arr = array_slice($arr_str, 1,1);//превращаем в строку
                $name_user = implode(" ", $arr);

                $view->with('name_user', $name_user);
                }
            });

            view()->composer('layouts.second', function($view)
            {
                if (!Auth::guest())
                {
                    $str=Auth::user()->name;//разбиваем на массив
                    $arr_str = explode(" ", $str);//берем первые 6 элементов
                    $arr = array_slice($arr_str, 1,1);//превращаем в строку
                    $name_user = implode(" ", $arr);

                    $view->with('name_user', $name_user);
                }
            });

            view()->composer('layouts.lk', function($view)
            {
                if (!Auth::guest())
                {
                    $str=Auth::user()->name;//разбиваем на массив
                    $arr_str = explode(" ", $str);//берем первые 6 элементов
                    $arr = array_slice($arr_str, 1,1);//превращаем в строку
                    $name_user = implode(" ", $arr);

                    $view->with('name_user', $name_user);
                }
            });

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
