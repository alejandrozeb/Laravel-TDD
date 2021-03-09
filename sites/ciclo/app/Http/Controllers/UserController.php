<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user = User::latest()->get();
        //no interactuamos con codido sql
        return view('users.index', [
            'users' => $user
        ]);
    }
    public function store(){
        
    }
    public function delete(){
        
    }
}
