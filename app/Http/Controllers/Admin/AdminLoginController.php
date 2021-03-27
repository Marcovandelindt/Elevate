<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Administrator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->middleware('guest:administrator');
    }

    /**
     * Show the login view
     */
    public function index()
    {
        $data = [
            'title' => 'Dashboard - Login',
        ];

        return view('admin.auth.login')
            ->with($data);
    }

    /**
     * Log the user in
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('administrator')->attempt($credentials)) {
            return redirect()
                ->route('admin.dashboard');
        }

        dd(bcrypt($request->password));

        return redirect()
            ->back()
            ->with('error', 'Login failed, please try again.');
    }
}
