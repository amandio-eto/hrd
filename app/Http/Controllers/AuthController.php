<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){


        return view('Auth.login');
    }

    public function auth(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/dasboard');
        }else{
            return back('login');
        }
    }

    public function logout(){

        Auth::logout();
        return redirect('login');
    }

    public function profile(){

        return view('Auth.profile');
    }

    public function chagepassword(Request $request){


        $validate = $request->validate([

            'passwordtuan' => 'required',
            'password' => 'required|confirmed'

        ]);

        //hau Sala iha usa salah iha function ho string array;

        $user = $request['passwordtuan'];
        $password = $request['password'];
        $auth = Auth::user()->password;
        if (Hash::check($user, $auth)){

            auth()->user()->update([

                'password' => bcrypt(request('password')),
            ]);
            return redirect('login');

        }else{

            return back()->withErrors(['passwordtuan' => 'Password la Hanesan Anterior']);

        }


    }

    public function foto(Request $request){
        $user = Auth::user();
        $user->update([

            'foto' => $request['foto']
        ]);

        if ($request->hasFile('foto')) {

            $request->file('foto')->move('images/', $request->file('foto')->getClientOriginalName());
            $user->foto =  $request->file('foto')->getClientOriginalName();
            $user->save();
        }
        return back()->with('success','ita Boot Nia Nia Profile Foto Update Ona');





    }

    //todo ida nee Mak List Controller

    public function list(){

        return view('Auth.create_user');
    }

    //todo Ida nee mak Rohan Husi Controller
}
