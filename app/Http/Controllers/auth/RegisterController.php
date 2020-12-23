<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\Users;

class RegisterController extends Controller
{
    public function registerUser(RegisterRequest $req)
    {
        $users = new Users();
        $users->name = $req->input('name');
        $users->surname = $req->input('surname');
        $users->birth_day = $req->input('birth_day');
        $users->email = $req->input('email');
        $users->speciality = $req->input('speciality');
        $users->study_year = $req->input('study_year');
        $users->password = $req->input('pass');

        $users->save();

        return redirect()->route('home');
    }
}
