<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        // include css yang di perlukan
        $data['css'] = [
            
        ];

        // include js yang di perlukan
        $data['js'] = [
            asset('assets/main-admin/plugins/chart.js/dist/chart.umd.js'),
            asset('assets/main-admin/pages/widget/amchart/amcharts.js'),
            asset('assets/main-admin/pages/widget/amchart/serial.js'),
            asset('assets/main-admin/pages/widget/amchart/light.js'),
            asset('assets/main-admin/js/SmoothScroll.js'),
            asset('assets/main-admin/pages/dashboard/crm-dashboard.js'),
        ];

        return view('Administrator.dasbor', $data);

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
