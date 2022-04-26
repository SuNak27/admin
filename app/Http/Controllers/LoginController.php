<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function index()
  {
    return view('login.index', [
      'title' => 'Login',
    ]);
  }

  // authenticate
  public function authenticate(Request $request)
  {
    $credentials = $request->validate([
      'email' => 'required|string|email',
      'password' => 'required|string',
    ]);

    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();
      return redirect()->intended('/');
    }

    return back()->with('loginError', 'Login gagal, silahkan coba lagi');
  }

  // logout
  public function logout(Request $request)
  {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
  }
}
