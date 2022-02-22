<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Mail\SendVerificationCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

class AuthController extends Controller
{
    public function signUp(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
        ]);
        try {
            $code = rand(100000, 999999);
            $user = new User();
            $user->email = $data['email'];
            $user->password = Hash::make($data['password']);
            $user->code_verification = $code;
            $user->save();
            return redirect('/login');
        } catch (Exception $e) {
            return response()->json([
                'message' => 'An error occurred'
            ], 500);
        }
    }

    public function generateCode(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        try {
            $user = User::where('email', $data['email'])->first();
            if (Hash::check($data['password'], $user->password)) {
                $url = URL::temporarySignedRoute(
                    'code-generated',
                    now()->addMinutes(10),
                    ['email' => $user->email]
                );

                Mail::to($user->email)->send(
                    new SendVerificationCode($user->code_verification)
                );
                return redirect($url);
            }
        } catch (Exception $e) {
            return response()->json([
                'message' => 'An error occurred'
            ], 500);
        }
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'code' => 'required|numeric',
            'email' => 'required|email'
        ]);
        try {
            $user = User::where('email', $data['email'])->first();

            if ($user->code_verification == $data['code']) {
                if (Auth::loginUsingId($user->id)) {
                    $request->session()->regenerate();
                    $user->code_verification = rand(100000, 999999);
                    $user->save();
                    return redirect()->intended('home')->with('user', $user);
                }
            }
        } catch (Exception $e) {
            return response()->json([
                'message' => 'An error occurred'
            ], 500);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
