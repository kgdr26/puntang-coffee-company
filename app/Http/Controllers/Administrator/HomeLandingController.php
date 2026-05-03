<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Vinkla\Hashids\Facades\Hashids;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class HomeLandingController extends Controller
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

            asset('assets/main-admin/main-js/home/list.js'),
        ];

        $data['listdata'] = DB::table('trx_home as t0')
                                ->select(
                                    't0.*', 
                                    'u1.name as created_by_name'
                                )
                                ->leftJoin('users as u1', 't0.trh_created_by', '=', 'u1.id')
                                ->where('t0.trh_status', 1)
                                ->orderBy('t0.trh_id', 'desc')
                                ->get();

        $data['listheader'] = DB::table('trx_home_slide as t0')
                                ->select(
                                    't0.*', 
                                    'u1.name as created_by_name'
                                )
                                ->leftJoin('users as u1', 't0.ths_created_by', '=', 'u1.id')
                                ->get();

        return view('Administrator.home.list', $data);

    }

    public function formheader(Request $request)
    {
        $decoded = !empty($request->id) ? Hashids::decode($request->id) : 0;

        $ths_id = $decoded[0] ?? 0;

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

            asset('assets/main-admin/main-js/home/formheader.js'),
        ];

        $data['arr'] = DB::table('trx_home_slide')->where('ths_id', $ths_id)->first();


        return view('Administrator.home.formheader', $data);
    }

    public function actionheader(Request $request)
    {
        try {

            if ($request->action === 'delete') {

                $id = $request->ths_id;

                $data = DB::table('trx_home_slide')
                    ->where('ths_id', $id)
                    ->first();

                if (!$data) {
                    return response()->json([
                        'status' => false,
                        'message' => 'Data tidak ditemukan'
                    ], 404);
                }

                // hapus file gambar
                if ($data->ths_image) {
                    $path = public_path('assets/img/home/' . $data->ths_image);

                    if (File::exists($path)) {
                        File::delete($path);
                    }
                }

                // hapus data
                DB::table('trx_home_slide')
                    ->where('ths_id', $id)
                    ->delete();

                return response()->json([
                    'status' => true,
                    'message' => 'Data berhasil dihapus'
                ]);
            }

            $request->validate([
                'ths_text_1' => 'nullable|string',
                'ths_text_2' => 'nullable|string',
                'ths_text_3' => 'nullable|string',
                'files'      => 'nullable|image|mimes:jpg,jpeg,png,gif'
            ]);

            $data = [
                'ths_text_1' => $request->ths_text_1,
                'ths_text_2' => $request->ths_text_2,
                'ths_text_3' => $request->ths_text_3,
            ];

            // ======================
            // UPLOAD FILE
            // ======================
            if ($request->hasFile('files')) {

                $file = $request->file('files');
                $filename = time() . '_' . $file->getClientOriginalName();

                $path = public_path('assets/img/home');

                if (!File::exists($path)) {
                    File::makeDirectory($path, 0755, true);
                }

                $file->move($path, $filename);

                $data['ths_image'] = $filename;
            }

            // ======================
            // UPDATE
            // ======================
            if ($request->ths_id) {

                $id = $request->ths_id;

                $old = DB::table('trx_home_slide')
                    ->where('ths_id', $id)
                    ->first();

                if (!$old) {
                    return response()->json([
                        'status' => false,
                        'message' => 'Data tidak ditemukan'
                    ], 404);
                }

                if ($request->hasFile('files') && $old->ths_image) {
                    $oldPath = public_path('assets/img/home/' . $old->ths_image);

                    if (File::exists($oldPath)) {
                        File::delete($oldPath);
                    }
                }

                DB::table('trx_home_slide')
                    ->where('ths_id', $id)
                    ->update($data);

            } 
            // ======================
            // INSERT
            // ======================
            else {

                $data['ths_created_by'] = Auth::id();
                $data['ths_created_date'] = now();

                $id = DB::table('trx_home_slide')->insertGetId($data);
            }

            // ======================
            // RETURN HASHED ID
            // ======================
            return response()->json([
                'status' => true,
                'message' => 'Data berhasil disimpan',
                'id' => Hashids::encode($id) // penting
            ]);

        } catch (\Exception $e) {

            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function formcontent(Request $request)
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


        return view('Administrator.home.formcontent', $data);
    }

    

}