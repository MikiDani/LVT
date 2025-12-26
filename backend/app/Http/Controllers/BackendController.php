<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use App\Models\User;

class BackendController extends Controller
{
	public function test()
	{
		// $role = Role::findByName('Valaki');
		// $role->givePermissionTo('view dashboard');
		dd('stop');
		// $user->assignRole('admin');

		// Permission::create(['name' => 'view dashboard']);
	}
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

		// DELETE OLD TOKEN
		$user->tokens()->delete();
		// CREATE NEW TOKEN
		$token = $user->createToken('admin')->plainTextToken;

		// SAVE TOKEN TO SESSION
		session(['admin_token' => $token]);

		$user->assignRole('visitor'); //!!!

		return redirect()->route('dashboard');
	}

	public function admin_registration()
	{
		return view('backend.admin_registration', [
			'title' => 'Registration',
			'breadcrumbs' => [
				'nolink' => 'registration'
			],
			'data' => null,
		  ]);
	}

	public function admin_registration_post(Request $request)
	{
		$request->validate([
			'name' => 'required|string|max:255',
			'email' => 'required|email|max:255',
			'password' => 'required|min:5|confirmed' //? admin
		]);

		$exists = User::where('email', $request->email)->exists();

		if ($exists) {
			return back()->withErrors([
				'email' => 'Ez az email cím már létezik'
			])->withInput();
		}

		User::create([
			'name' => $request->name,
			'email' => $request->email,
			'password' => Hash::make($request->password)
		]);

		return redirect()->route('admin_login')->with(
			'success',
			'A regisztráció sikeres! Lépj be a megadott jelszóval.'
		);
	}

	public function admin_logout()
{
	$user = Auth::user();

	if ($user) {
		$user->tokens()->delete();
	}

	Auth::logout();

	request()->session()->forget('admin_token');
	request()->session()->invalidate();
	request()->session()->regenerateToken();

	return redirect()->route('admin_login');
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
