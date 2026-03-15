<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

if (!function_exists('theme')) {

    function theme($key = null, $template = 'landing')
    {

        $settings = DB::table('mst_template_settings')
            ->where('mts_template', $template)
            ->where('mts_status', 1)
            ->pluck('mts_value', 'mts_key')
            ->toArray();

        if ($key) {
            return $settings[$key] ?? null;
        }

        return $settings;
    }

}

if (!function_exists('theme_css')) {

    function theme_css($template = 'landing')
    {

        $theme = theme(null, $template);

        $css = "<style>\n:root{\n";

        foreach ($theme as $key => $value) {
            $css .= "--{$key}: {$value};\n";
        }

        $css .= "}\n</style>";

        return $css;
    }

}