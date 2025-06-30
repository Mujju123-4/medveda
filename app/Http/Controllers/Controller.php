<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function login(Request $request)
    {
        $admin = User::where('email', $request->email)->first();

        if ($admin && hash('sha256', $request->password) === $admin->password) {
            $data = Auth::guard('web')->login($admin);

            return redirect()->route('web.login');
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
        ]);

        // Hash password using SHA-256
        $hashedPassword = hash('sha256', $request->password);

        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => $hashedPassword,
        ]);

        // return redirect()->route('/')->with('success', 'Registered successfully.');
    }
}
