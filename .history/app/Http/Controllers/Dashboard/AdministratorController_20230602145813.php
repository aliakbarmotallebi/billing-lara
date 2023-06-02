<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function __construct(Request $request)
    {
        $this->middleware('guest')->except('logout');
    }

    public function showFormAuth()
    {
        return view('security.dashboard');
    }

    public function auth(Request $request)
    {
        $request->validate([
            'username' => 'required|regex:/(09)[0-9]{9}/|digits:11|numeric',
            'passcode' => 'required',
            'captcha'  => 'required|captcha',
        ]);

        if ( ! $this->checkUser($request) ) {
            toast('نام کاربری یا گذارواژه متعبر نمی باشد','error');
            return redirect()->back();
        }
        
        toast('با موفیقت وارد سیستم شدید','success');
        return redirect()->route('dashboard.index');
    }

    protected function checkUser(Request $request) : bool
    {
        $credentials = [
            'username' => $request->username,
            'password' => $request->passcode,
        ];

        if (auth()->attempt($credentials, $request->get('remember'))) {
            return true;
        }

        return false;
    }
}
