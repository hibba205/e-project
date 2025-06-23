<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //  public function showLoginRegisterForm()
    // {
    //     return view('user.signIn');
    // }
    // public function register(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:50',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|min:6|max:8',
    //         'role' => 'required|string|in:user,admin',
    //         'age' => 'required|integer|min:1'
    //         ]);

    //     User::create([
    //         'name' => $request->input('name'),
    //         'email' => $request->input('email'),
    //         'password' => Hash::make($request->password),
    //         'role' => $request->input('role'),
    //         'age' => $request->input('age')
    //     ]);
    //     return redirect('/signIn')->with('success', 'Registration successful! Please log in.');

    // }
    // public function login(Request $request)
    // {
    //      $credentials = $request->only('email', 'password');

    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();
    //         return redirect('/');
    //     }

    //     return back()->withErrors([
    //         'email' => 'Invalid email or password.',
    //     ])->withInput();
    // }
    // public function logout(Request $request)
    // {
    //     Auth::logout();
    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();
    //     return redirect('/')->with('success', 'Logged out successfully.');
    // }
    public function index()
{
    $users = User::all(); // fetch all users from the database
    return view('admin/viewers', compact('users'));
}
     public function registerForm()
    {
        return view('user.signIn');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:4|max:16',
            'age' => 'required|integer|min:1',
            'role' => 'required|string|in:admin,user'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'age' => $request->input('age')
        ]);

        return redirect('/signIn');
    }

    public function loginForm()
    {
        return view('/sign_in');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            switch (Auth::user()->role) {
                case 'admin':
                    return redirect('/admin/dashboard')->with('role', 'admin');

                case 'user':
                    return redirect('/user/index')->with('role', 'user');
            }
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect('/signIn');


    }

    public function dashboard()
    {
        $user = Auth::user();
        if($user->role === 'admin' || $user->role === 'manager'){
            return view('admin/dashboard', compact('user'));
        }

        if($user->role === 'user'){
            return view('user.index', compact('user'));
        }
    }
}
