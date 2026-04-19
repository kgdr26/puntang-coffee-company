<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
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

        $data['listproduct'] = ['gmb_f10.png','gmb_f11.png','gmb_f12.png','gmb_f13.png','gmb_f14.png','gmb_f15.png'];

        return view('Landing.product', $data);
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
