<?php
use App\Models\Menu;
use App\Models\User;
use Illuminate\Support\Facades\DB;

if (!function_exists('menus')) {

    function menus()
    {
        return Menu::select('mst_menus.*')
            ->join('mst_modules','mst_modules.msm_id','=','mst_menus.msmnu_module_id')
            ->where('mst_modules.msm_middleware','web')
            ->whereNull('mst_menus.msmnu_parent')
            ->where('mst_menus.msmnu_status',1)
            ->with('children')
            ->orderBy('mst_menus.msmnu_order')
            ->get();
    }

}

if (!function_exists('adminMenus')) {

    function adminMenus()
    {
        return Menu::select('mst_menus.*')
            ->join('mst_modules','mst_modules.msm_id','=','mst_menus.msmnu_module_id')
            ->where('mst_modules.msm_middleware','admin')
            ->whereNull('mst_menus.msmnu_parent')
            ->where('mst_menus.msmnu_status',1)
            ->with('children')
            ->orderBy('mst_menus.msmnu_order')
            ->get();
    }

}

if (!function_exists('setting')) {

    function setting($field)
    {

        static $settings = null;

        if ($settings === null) {

            $settings = DB::table('mst_site_settings')->first();

        }

        return $settings->$field ?? null;

    }

}

if (!function_exists('admin')) {

    function admin()
    {
        if(session()->has('admin_id')){

            return User::find(session('admin_id'));

        }

        return null;
    }

}

