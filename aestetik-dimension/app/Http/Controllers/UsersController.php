<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function showr()
    {
        return view('register');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'firstname' => 'required|max:45',
            'lastname' => 'required|max:45',
            'email' => 'required|email|unique:registers,email|max:255',
            'password' => 'required|max:155'
        ]);

        $validated['password'] = Hash::make($validated['password']);
        $user = Register::query()->create($validated);
        Auth::login($user);
        return redirect()->to(route("catalog.product"));
    }

    public function showl()
    {
        return view('login');
    }

    public function connect(Request $request)
    {

        $validated = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|max:155'
        ]);


        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            return redirect()->to(route("catalog.product"));
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('/catalog');
    }

    public function showre()
    {
        return view('reset');
    }

    public function resetp(Request $request)
    {

        $validated = $request->validate([
            'email' => 'required|email|max:255'
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            return redirect()->to(route("login"));
        }
    }
}
