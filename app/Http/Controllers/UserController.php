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
        $user->save();
        return response()->json([
            "name"=>$user->name,
            "email"=>$user->email
        ]);
    }

    function updateUser(Request $req, $id){
        $user=User::find($id);
        $user->name=$req->name?$req->name:$user->name;
        $user->email=$req->email?$req->email:$user->email;
        $user->address=$req->address?$req->address:$user->address;
        $user->phone=$req->phone?$req->phone:$user->phone;
        $user->password=$req->password?Hash::make($req->password):$user->password;
        $user->save();
        return response()->json([
            "message"=>"success update user data"
        ]);
    }
}
