<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function getAllUser(){
        $users=User::all();
        return response()->json($users);
    }

    function getUserById($id){
        $user=User::find($id);
        return response()->json($user);
    }

    function insertUser(Request $req){
        $user= new User();
        $user->name=$req->name;
        $user->email=$req->email;
        $user->address=$req->address;
        $user->phone=$req->phone;
        $user->password=Hash::make($req->password);
    }

    
}
