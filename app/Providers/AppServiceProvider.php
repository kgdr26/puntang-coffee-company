<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        $settings = DB::table('theme_settings')->get();

        $css = ":root {";
        foreach ($settings as $item) {
            $css .= "--{$item->name}: {$item->value};";
        }
        $css .= "}";

        View::share('themeCss', $css);

    }
}
