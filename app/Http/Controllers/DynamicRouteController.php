<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;

class DynamicRouteController extends Controller
{
    public static function register()
    {

        if (!\Schema::hasTable('mst_modules')) {
            return;
        }

        $modules = Module::where('msm_status',1)
            ->with(['routes' => function($q){
                $q->where('msr_status',1);
            }])
            ->get();

        return $modules;

    }
}
