<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class UserController extends Controller
{
    public function user(){

    	$users = DB::Select('SELECT  roles.role , users.name ,users.email , users.id
        FROM users
        LEFT JOIN roles ON users.role_id = roles.id order  by users.created_at desc');
        // dd($users);
    	return view('users.index',compact('users'));
    }
}
