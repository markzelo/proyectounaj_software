<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;//directiva use para usar la clse controller
use App\User;

class UserController extends Controller
{
    public function index(){
    	$users = User::where('role', 1)->get();
    	return view('admin.users.index')->with(compact('users'));
    }

    public function store(Request $request){
    	//reglas de validacion
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6'
        ];

        // msj de error personalizado
        $messages = [
            'name.required' => 'Es necesario ingresar el nombre del usuario.',
            'name.max' => 'El nombre ingresado es demasiado extenso.',
            'email.required' => 'Es necesario ingresar el email del usuario.',
            'email.email' => 'El email que ha ingresado no es valido.',
            'email.max' => 'El email ingresado ya se encuentra en uso.',
            'email.unique' => 'La descripcion debe superar los 15 caracteres.',
            'password.required' => 'Debe ingresar una contraseña.',
            'password.min' => 'La contraseña debe superar los 6 caracteres.'
        ];

    	$this->validate($request, $rules, $messages);

    	$user = new User();
    	$user->name = $request->input('name');
    	$user->email = $request->input('email');
    	$user->password = bcrypt($request->input('password'));
    	$user->role = 1; //1:soporte
    	$user->save();

    	dd($request->all());
    	return back()->with('notification', 'Usuario registrado exitosamente.');
    }

    public function edit($id){
    	$user = User::find($id);
    	return view('admin.users.edit')->with(compact('user'));
    }

    public function update($id, Request $request){
    	
    	$rules = [
            'name' => 'required|max:255',
            'password' => 'min:6'
        ];

        $messages = [
            'name.required' => 'Es necesario ingresar el nombre del usuario.',
            'name.max' => 'El nombre ingresado es demasiado extenso.',
            'password.min' => 'La contraseña debe tener mas de 6 caracteres.'
        ];


    	$this->validate($request, $rules, $messages);

    	$user = User::find($id);
    	$user->name = $request->input('name');

    	$password = $request->input('password');
    	if ($password) {
    		$user->password = bcrypt($password);
    	}

    	$user->save();
    	return back()->with('notification', 'Usuario modificado exitosamente.');
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return back()->with('notification', 'El ususario se ha eliminado exitosamente.');
    }
}
