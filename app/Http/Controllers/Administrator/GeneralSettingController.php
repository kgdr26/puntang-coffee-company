<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{
    public function index()
    {

        // include css yang di perlukan
        $data['css'] = [
            
        ];

        // include js yang di perlukan
        $data['js'] = [
            asset('assets/main-admin/plugins/i18next/dist/umd/i18next.min.js'),
            asset('assets/main-admin/plugins/i18next-http-backend/i18nextHttpBackend.min.js'),
            asset('assets/main-admin/plugins/i18next-browser-languagedetector/dist/umd/i18nextBrowserLanguageDetector.min.js'),
            asset('assets/main-admin/plugins/jquery-i18next/jquery-i18next.min.js'),
        ];

        return view('Administrator.generalsetting', $data);

    }

    /**
     * halaman form / page
     */
    public function page(Request $request)
    {
        return "Page";
    }


    /**
     * insert data
     */
    public function insert(Request $request)
    {

        return "Page";

    }


    /**
     * update data
     */
    public function update(Request $request)
    {

       return "Page";
    }


    /**
     * delete data
     */
    public function delete(Request $request)
    {

        return "Page";

    }


    /**
     * list data untuk table
     */
    public function listData(Request $request)
    {

        return "Page";

    }


    /**
     * show detail data
     */
    public function showData(Request $request)
    {

        return "Page";

    }
}
