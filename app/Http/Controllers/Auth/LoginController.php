<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $username;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        $login_value = request('username');

        $this->username = filter_var($login_value, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        request()->merge([$this->username => $login_value]);
        return property_exists($this, 'username') ? $this->username : 'email';
    }

    public function redirectTo() {
        $role = Auth::user()->role_id;
        switch ($role) {
          case 3:
            return route('password.form');
            break;

          default:
            return 'home';
          break;
        }
      }

}
