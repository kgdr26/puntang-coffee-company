<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Vinkla\Hashids\Facades\Hashids;

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

        $data['listproduct'] = DB::table('trx_product')->where('trp_status', 1)->get();
        $data['list_package'] = DB::table('trx_package_product')->where('tpp_status', 1)->get();

        return view('Landing.product.our', $data);
    }

    public function getajaxdetailprod(Request $request)
    {
        // validasi biar aman
        $request->validate([
            'id' => 'required'
        ]);

        $product = DB::table('trx_product')->where('trp_id',  $request->id)->first();

        if(!$product){
            return response()->json([
                'status' => false,
                'message' => 'Product tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'trp_id' => $product->trp_id,
            'trp_name' => $product->trp_name,
            'trp_description' => $product->trp_description,
            'trp_image' => $product->trp_image
        ]);
    }

    public function proccesing()
    {
        // include css yang di perlukan
        $data['css'] = [
            
        ];

        // include js yang di perlukan
        $data['js'] = [
            
        ];

        $data['get_header'] = DB::table('mst_header')->where('msh_id', 2)->first();
        $data['get_content'] = DB::table('trx_prod_proccess')->where('tpr_id', 1)->first();

        return view('Landing.product.processing', $data);
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
