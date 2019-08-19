<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Category;
use App\SubCategory;
use App\Slide;
use App\Product;
use App\User;


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
        $data['categories'] = Category::all();
        $data['subcategories'] = SubCategory::all();
        $data['sliders'] = Slide::all();
        $data['products'] = Product::all();
        $data['users'] = User::all();
        
        view()->share($data);
    }
}
