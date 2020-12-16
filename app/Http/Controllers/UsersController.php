<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Http\Request;
use App\Users;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    //
    public function Register(Request $request)
    {

        // $this->validate($request, [
        //     'email_user'      => 'required|email|unique:users',
        //     'password_user'   => 'required|min:8',
        //     'name_user'       => 'required',
        //     'address_user'  => 'required',

        // ]);

        try {



            Users::create([
                'email_user' => $request->input('email_user'),
                'password_user' => Hash::make($request->input('password_user')),
                'name_user' => $request->input('name_user'),
                'address_user' => $request->input('address_user'),
            ]);

            // Session::flash('success', 'Akun berhasil didaftarkan, silahkan menunggu akun untuk diverifikasi');
            // return view('pages.guest.auth.login-guest');
            return view('main.pages.user-login');
        }
        catch(\Illuminate\Database\QueryException $e)
        {
            $errorCode = $e->errorInfo[1];
            $errorMsg = $e->errorInfo[2];
            if ($errorCode == 1062) {
                return redirect('/');
            }
            Session::flash('error', $errorMsg);
            return redirect()->back();
            // return view('dashboard.pages.home');
        }
        // catch (\Throwable $th) {
        //     //throw $th;
        //     return view('dashboard.pages.home');
        // }
    }
}
