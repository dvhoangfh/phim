<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {
        $post_data = array(
            'email' => $request->username,
            'password' => $request->password
        );

        try {
            if (Auth::attempt($post_data)) {
                $request->session()->put('is_login', 1);
                return redirect()->route('phim');
            }else {
                return redirect()->back()->with([
                     'flash_level'   => 'danger',
                     'flash_message' => 'Tài khoản & mật khẩu không chính xác',
                     'name'        => $post_data['email'],
                     'password'      => $post_data['password']
                 ]);
            }
        } catch (Exception $e) {
            pr($e);
            exit;
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
