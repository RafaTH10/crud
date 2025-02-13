<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loadAllUsers(){
        $all_users = User::all();
        return view('user', compact('all_users'));
    }

    public function LoadAddUserForm(){
        return view('add-user');
    }

    public function AddUser(Request $request){
        $request->validate([
            'nombre_completo' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'numero_telefono' => 'required|integer',
            'contraseña' => 'required|confirmed',
        ]);

        User::create([
            'nombre_completo' => $request->nombre_completo,
            'email' => $request->email,
            'numero_telefono' => $request->numero_telefono,
            'password' => bcrypt($request->contraseña),
        ]);

        return redirect('/user')->with('success', 'Usuario creado con éxito');

    }

    public function LoadEditUserForm($id){
        $user = User::find($id);
        return view('edit-user', compact('user'));
    }

    
}
