<?php

namespace App\Http\Controllers;

use App\Models\User;
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
    public function store(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return back(); //retorna a la vista anterior
    }
    public function destroy(User $user){
        //reconoce el tipo de dato
        
        $user->delete();

        return back();
    }
}
