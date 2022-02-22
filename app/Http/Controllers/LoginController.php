<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;

use Session;


class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = User::where('email', '=', $request->email)->first();
        if ($user) {
            $request->session()->put('loginId', $user->id);
            return redirect('dashboard');
            /* if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect()->to('layouts.home');
            } else {
                return back()->with('fail');
            }*/
        } else {
            return back()->with('fail', 'Email is not registered yet.');
        }
    }

    public function dashb()
    {
        $data = array();
        if (session()->has('loginId')) {
            $data = User::where('id', '=', session()->get('loginId'))->first();
        }
        return view('layouts.dashboard', compact('data'));
    }

    public function logout()
    {
        if (session()->has(('loginId'))) {
            session()->pull('loginId');
            return redirect('/login');
        }
    }
}
