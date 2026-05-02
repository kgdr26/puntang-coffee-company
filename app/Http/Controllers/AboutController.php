<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Vinkla\Hashids\Facades\Hashids;

class AboutController extends Controller
{
    /**
     * halaman utama module
     */
    public function index()
    {
        // include css yang di perlukan
        $data['css'] = [
            
        ];

        // include js yang di perlukan
        $data['js'] = [
            
        ];

        $data['get_header'] = DB::table('mst_header')->where('msh_id', 1)->first();
        $data['get_sec_one'] = DB::table('trx_about')->where('tas_id', 1)->first();
        $data['get_sec_two'] = DB::table('trx_about')->where('tas_id', 2)->first();
        $queryimage = DB::table('trx_about')->where('tas_id', 3)->first();
        $loop_img = explode(',',$queryimage->tas_image);
        $data['get_sec_three'] = $loop_img;

        return view('Landing.about', $data);
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
