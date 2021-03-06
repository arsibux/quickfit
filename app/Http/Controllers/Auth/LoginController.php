<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller {
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
    public function __construct() {
        $this->middleware('guest', ['except' => 'logout']);
    }

    protected function redirectTo() {
        if (Auth::check()) {
            if (Auth::id() == 1) {
                return '/companies';
            } else{
                 return '/customers';
            }
        }
    }
     public function package_validity($validity) {
        $package_validity = array();
        switch ($validity) {
            case 1:
                $package_validity['package'] = "Trial Package";
                $package_validity['ends_at'] = Carbon::now()->addMonths($validity);
                break;
            case 3:
                $package_validity['package'] = "Silver Package";
                $package_validity['ends_at'] = Carbon::now()->addMonths($validity);
                break;
            case 6:
                $package_validity['package'] = "Gold Package";
                $package_validity['ends_at'] = Carbon::now()->addMonths($validity);
                break;
            case 12:
                $package_validity['package'] = "Classic Package";
                $package_validity['ends_at'] = Carbon::now()->addMonths($validity);
                break;
        }
        return $package_validity;
    }
}