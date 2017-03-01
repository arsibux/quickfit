<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Models\Package;
use Carbon\Carbon;
use App\Models\Subscription;

class RegisterController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Register Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users as well as their
      | validation and creation. By default this controller uses a trait to
      | provide this functionality without requiring any additional code.
      |
     */

use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {
        return Validator::make($data, [
                    'name' => 'required|max:255',
                    'email' => 'required|email|max:255|unique:users',
                    'password' => 'required|min:6|confirmed',
                    'subscription' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data) {

        $package_id = $data['subscription'];
        $package = Package::find($package_id);
//        dd($package);exit;
        $package_ends_at = $this->package_validity($package->validity);

//        dd($package_ends_at);exit;
         User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
         if(auth()->id){
        Subbscription::create([
            'name' => $package->name,
            'payment' => 0,
            'trial_ends_at' => Carbon::now()->addMonths(1),
            'ends_at' => $this->package_validity($package->validity),
            'user_id' => auth()->id,
            
        ]);
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
