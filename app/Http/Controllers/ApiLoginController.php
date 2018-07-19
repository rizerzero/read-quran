<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class ApiLoginController extends Controller
{
    //


    use AuthenticatesUsers;


    public function __construct()
    {
        request()->headers->set('Accept', 'application/json');
      
    }
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '';

    public function login(Request $request)
    {
        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            $token = \Auth::user()->createToken('Personal Token')->accessToken;
            return response()->json(['access_token' => $token ]);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return response()->json(['error' => ['message' => 'Invalid credintial']], 422);
    }

    public function register(Request $request)
    {
        $this->validateRegister($request);
        $user = \App\User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $token = $user->createToken('Personal Token')->accessToken;

        return response()->json(['access_token' => $token ]);
    } 

    protected function validateRegister(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);
    }
}
