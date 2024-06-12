<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();

            $getUser = User::where('provider_id', '=', $user->id)->first();
            if (!$getUser) {
                $this->_registerOrLoginUser($user);
                return redirect()->route('authencticateWithMembership');
            }
            $this->_registerOrLoginUser($user);
            Auth::login($getUser);
            return redirect()->route('home');
        } catch (\Exception $e) {
            if ($e instanceof \Laravel\Socialite\Two\InvalidStateException) {
                return redirect()->route('login');
            } else {
                return redirect()->route('login');
            }
        }
    }

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();

            $getUser = User::where('provider_id', '=', $user->id)->first();
            if (!$getUser) {
                $this->_registerOrLoginUser($user);
                return redirect()->route('authencticateWithMembership');
            }
            $this->_registerOrLoginUser($user);
            Auth::login($getUser);
            return redirect()->route('home');
        } catch (\Exception $e) {
            if ($e instanceof \Laravel\Socialite\Two\InvalidStateException) {
                return redirect()->route('login');
            } else {
                return redirect()->route('login');
            }
        }
    }

    protected function _registerOrLoginUser($data)
    {
        $user = User::where('email', '=', $data['email'])->first();
        if (!$user) {
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->avatar = $data->avatar;
            $user->save();
        }
        session(['user' => $user]);
    }

    public function authencticateWithMembership()
    {
        return view('auth.membership');
    }

    public function authencticateWithMembershipStore(Request $request)
    {
        $userSession = session('user');
        $user = User::find($userSession->id);
        $user->membership_type = $request->membership;
        $user->save();
        Auth::login($user);
        return redirect()->route('home');
    }
}
