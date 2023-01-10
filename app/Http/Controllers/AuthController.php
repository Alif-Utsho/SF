<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    //

    public function RegistrationGet(){
        return view('auth.registration');
    }

    public function RegistrationPost(Request $req){
        $validate = $req->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:6'
            ],
            [
                'name.required' => 'Please provide your Name',
                'email.required' => 'Please provide an Email',
                'email.email' => 'Please provide a valid Email',
                'password.required' => 'Please provide a Password',
                'password.min' => 'Password is too short'
            ]
        );

        $var = new User();
        $var->name = $req->name;
        $var->email = $req->email;
        $var->type = $req->type;
        $var->password = Hash::make($req->password);
        $var->save();
        return $req;
    }

    public function LoginGet(){
        return view('auth.login');
    }

    public function LoginPost(Request $req){
        $validate = $req->validate(
            [
                'email' => 'required|email',
                'password' => 'required|min:6'
            ],
            [
                'email.required' => 'Please provide an Email',
                'email.email' => 'Please provide a valid Email',
                'password.required' => 'Please provide a Password',
                'password.min' => 'Password is too short'
            ]
        );

        $user = User::where('email', $req->email)->first();
        if($user){
            if(Hash::check($req->password, $user->password)){
                $req->session()->put('user', $user);
                return redirect()->route('cart.get');
            }
            else return "Invalid Credential";
        }
        else return "User not found";
        return redirect()->route('login.get');
    }

    public function logout(){
        session()->flush();
        return redirect()->route('login.get');
    }
    
}
