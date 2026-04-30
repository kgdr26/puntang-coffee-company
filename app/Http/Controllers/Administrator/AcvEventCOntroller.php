<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Vinkla\Hashids\Facades\Hashids;

class AcvEventCOntroller extends Controller
{
    public function index()
    {

        // include css yang di perlukan
        $data['css'] = [
            asset('assets/main-admin/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css'),
            asset('assets/main-admin/assets/pages/data-table/css/buttons.dataTables.min.css'),
            asset('assets/main-admin/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css'),
        ];

        // include js yang di perlukan
        $data['js'] = [
            asset('assets/main-admin/plugins/datatables.net/js/jquery.dataTables.min.js'),
            asset('assets/main-admin/plugins/datatables.net-buttons/js/dataTables.buttons.min.js'),
            asset('assets/main-admin/pages/data-table/js/jszip.min.js'),
            asset('assets/main-admin/pages/data-table/js/pdfmake.min.js'),
            asset('assets/main-admin/pages/data-table/js/vfs_fonts.js'),
            asset('assets/main-admin/plugins/datatables.net-buttons/js/buttons.print.min.js'),
            asset('assets/main-admin/plugins/datatables.net-buttons/js/buttons.html5.min.js'),
            asset('assets/main-admin/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js'),
            asset('assets/main-admin/plugins/datatables.net-responsive/js/dataTables.responsive.min.js'),
            asset('assets/main-admin/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js'),

            asset('assets/main-admin/plugins/i18next/dist/umd/i18next.min.js'),
            asset('assets/main-admin/plugins/i18next-http-backend/i18nextHttpBackend.min.js'),
            asset('assets/main-admin/plugins/i18next-browser-languagedetector/dist/umd/i18nextBrowserLanguageDetector.min.js'),
            asset('assets/main-admin/plugins/jquery-i18next/jquery-i18next.min.js'),

            asset('assets/main-admin/main-js/activity/event.js'),
        ];

         $data['listdata'] = DB::table('trx_event as e')
                                ->select(
                                    'e.*', 
                                    'u1.name as created_by_name',
                                    'u2.name as updated_by_name'
                                )
                                ->leftJoin('users as u1', 'e.tre_created_by', '=', 'u1.id')
                                ->leftJoin('users as u2', 'e.tre_updated_by', '=', 'u2.id')
                                ->orderBy('e.tre_id', 'desc')
                                ->get();


        return view('Administrator.activity.event', $data);

    }

    public function form(Request $request)
    {
        $decoded = Hashids::decode($request->id);

        $tre_id = $decoded[0] ?? 0;

        // include css yang di perlukan
        $data['css'] = [
            asset('assets/main-admin/pages/jquery.filer/css/jquery.filer.css'),
            asset('assets/main-admin/pages/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css'),
        ];

        // include js yang di perlukan
        $data['js'] = [
            asset('assets/main-admin/plugins/i18next/dist/umd/i18next.min.js'),
            asset('assets/main-admin/plugins/i18next-http-backend/i18nextHttpBackend.min.js'),
            asset('assets/main-admin/plugins/i18next-browser-languagedetector/dist/umd/i18nextBrowserLanguageDetector.min.js'),
            asset('assets/main-admin/plugins/jquery-i18next/jquery-i18next.min.js'),
            asset('assets/main-admin/pages/advance-elements/custom-picker.js'),
            asset('assets/main-admin/pages/jquery.filer/js/jquery.filer.min.js'),
            asset('assets/main-admin/pages/filer/custom-filer.js'),
            asset('assets/main-admin/pages/filer/jquery.fileuploads.init.js'),
            asset('assets/main-admin/js/ckeditor.js'),

            asset('assets/main-admin/main-js/activity/event.js'),
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


        return view('Administrator.activity.formevent', $data);
    }

}