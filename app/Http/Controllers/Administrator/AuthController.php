<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * tampilkan halaman login
     */
    public function index()
    {
        return view('Administrator.auth');
    }


    /**
     * proses login
     */
    public function login(Request $request)
    {

        $login = $request->login;
        $password = $request->password;

        $user = User::where('email',$login)
                    ->orWhere('username',$login)
                    ->first();

        if(!$user){

            return back()->with('error','User tidak ditemukan');

        }

        if(!Hash::check($password,$user->password)){

            return back()->with('error','Password salah');

        }

        if($user->status == 0){

            return back()->with('error','User tidak aktif');

        }

        session([
            'admin_id' => $user->id,
            'admin_name' => $user->name,
            'admin_role' => $user->role_id
        ]);

        return redirect('/administrator/dashboard');

    }


    /**
     * logout
     */
    public function logout()
    {

        session()->flush();

        return redirect('/administrator/login');

    }
}
