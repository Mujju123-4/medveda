<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $admin = Admin::where('email', $request->email)->first();

        if ($admin && hash('sha256', $request->password) === $admin->password) {
            $data = Auth::guard('admin')->login($admin);

            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function register(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name'     => 'required',
            'email'    => 'required',
            'password' => 'required',
            'role_id' => 'required',
        ]);

        // Hash password using SHA-256
        $hashedPassword = hash('sha256', $request->password);

        Admin::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => $hashedPassword,
            'role_id' => $request->role_id,
        ]);

        return redirect()->back()->with('success', 'Registered successfully.');
    }


    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        // Optionally clear the session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin'); // or wherever your login form is
    }

    public function registerForm()
    {
        $role = DB::table('roles')->select('id', 'name')->get();
        return view('backend.roles.register', compact('role'));
    }
}
