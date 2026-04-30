<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Vinkla\Hashids\Facades\Hashids;

class ActivityController extends Controller
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

        $data['list_event'] = DB::table('trx_event as e')
                                ->select(
                                    'e.*', 
                                    'u.name as created_by_name'
                                )
                                ->join('users as u', 'e.tre_created_by', '=', 'u.id')
                                ->orderBy('e.tre_id', 'desc')
                                ->get();

        return view('Landing.activity.event', $data);
    }

    public function getEvent(Request $request)
    {

        $decoded = Hashids::decode($request->id);

        $tre_id = $decoded[0] ?? 0;

        // include css yang di perlukan
        $data['css'] = [
            
        ];

        // include js yang di perlukan
        $data['js'] = [
            
        ];

        $data['arr'] = DB::table('trx_event as e')
                                ->select(
                                    'e.*', 
                                    'u.name as created_by_name'
                                )
                                ->join('users as u', 'e.tre_created_by', '=', 'u.id')
                                ->where('e.tre_id', $tre_id)
                                ->orderBy('e.tre_id', 'desc')
                                ->first();

        return view('Landing.activity.detailevent', $data);
    }

    public function csr()
    {
        // include css yang di perlukan
        $data['css'] = [
            
        ];

        // include js yang di perlukan
        $data['js'] = [
            
        ];

        return view('Landing.activity.csr', $data);
    }

    public function program()
    {
        // include css yang di perlukan
        $data['css'] = [
            
        ];

        // include js yang di perlukan
        $data['js'] = [
            
        ];

        return view('Landing.activity.program', $data);
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
