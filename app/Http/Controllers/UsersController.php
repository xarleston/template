<?php

namespace App\Http\Controllers;

use App\User;
use App\VueTables\EloquentVueTables;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{

    public function index() {
        return User::all();
    }

    public function users() {
        return view('users/gestion');
    }

    public function usersJson () {
		if(request()->ajax()) {
            $vueTables = new EloquentVueTables;
			$data = $vueTables->get(new User, ['id', 'name', 'email']);
			return response()->json($data);
		}
		return abort(401);
	}

    public function create(Request $request){

         Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ])->validate();         //dd($request);

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return response()->json(['msg' => 'ok']);

    }
}
