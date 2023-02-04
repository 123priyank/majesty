<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'full_name' => ['required', 'string', 'max:255'],
            'enagic_email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'contact_number' => ['required','min:10','max:10'],
            'profile_pic' => ['mimes:jpeg,jpg,png,gif|max:10000'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['required', 'string', 'min:8'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        $request = request();

        $data['full_name'] = $request->full_name;
        $data['enagic_email'] = $request->enagic_email;
        $data['contact_number'] = $request->contact_number;
        $data['alternative_contact_number'] = $request->alternative_contact_number;
        $data['birth_date'] = $request->birth_date;
        $data['blood_group'] = $request->blood_group;
        $data['date_of_birth_spouse'] = $request->date_of_birth_spouse;
        $data['anniversary_date'] = $request->anniversary_date;
        $data['home_address'] = $request->home_address;
        $data['district'] = $request->district;
        $data['state'] = $request->state;
        $data['country'] = $request->country;
        $data['city'] = $request->city;
        $data['enagic_id_no'] = $request->enagic_id_no;
        $data['enagic_sponser_name'] = $request->enagic_sponser_name;
        $data['enagic_sponser_id'] = $request->enagic_sponser_id;
        $data['device_mode'] = $request->device_mode;
        $data['joining_date'] = $request->joining_date;
        $data['status'] = 1;
        $data['role'] = 'user';
        $data['password'] = Hash::make($data['password']);
        if ($request->hasFile("profile_pic")) {
            $img = $request->file("profile_pic");
            $img->store('public/admin/images');
            $data['profile_pic'] = $img->hashName();

        }

        $user = User::create($data);

        return $user;


    }
}
