<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BackendController extends Controller
{
    public function admin_login()
    {
        return view('backend.admin_login', [
            'title' => 'Login',
            'breadcrumbs' => [
                'nolink' => 'Login'
            ],
            'data' => null,
          ]);
    }

    public function admin_login_post(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!Auth::attempt($request->only('email', 'password'))) {
            return back()->withErrors([
                'email' => 'Hibás belépési adatok'
            ]);
        }

        $user = $request->user();

        // régi tokenek törlése (opcionális, de adminnál ajánlott)
        $user->tokens()->delete();

        $token = $user->createToken('admin')->plainTextToken;

        // token sessionbe mentése (backend használathoz)
        session(['admin_token' => $token]);

        return redirect()->route('dashboard');
    }

    public function dashboard(Request $request)
    {
        return view('backend.dashboard', [
            'title' => 'Dashboard',
            'breadcrumbs' => [
                route('dashboard') => 'Dashboard'
            ],
            'data' => null,
          ]);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        session()->forget('admin_token');

        return redirect()->route('admin.login');
    }
}
