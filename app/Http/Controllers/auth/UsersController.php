<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UsersRequest;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function registerUser(UsersRequest $req)
    {
        $users = new Users();

        $users->name = $req->input('name');
        $users->surname = $req->input('surname');
        $users->birth_day = $req->input('birth_day');
        $users->email = $req->input('email');
        $users->speciality = $req->input('speciality');
        $users->study_year = $req->input('study_year');
        $users->password = Hash::make($req->input('pass'));

        $users->save();

        return redirect()->route('login');
    }

    public function loginUser(Request $req)
    {
        $users = new Users();

        $isUser = $users->where('email',$req->input('email'))->get();
        
        if(count($isUser) > 0)
        {
            if (Hash::check($req->input('pass'), $isUser[0]->password)) {
                Auth::login($isUser[0]);
                return redirect()->route('home');
            }else{
                return 'bad';
            }
        }else{
            return 'bad';
        }
        
    }

    public function logoutUser()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
