<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create(Request $req)
    {
        $rules=array(
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:8',
            'phone'=>'required',
            'address_id'=>'required'
        );
        $validator=Validator::make($req->all(),$rules);
        if($validator->fails())
        {
            return response()->json(['massege'=> $validator->errors()],400);
        }
        $email=user::where('email',$req->email)->first();
        if($email)
        {
            return response()->json(['massege'=>'Invalid Email'],401);
        }
        $user=new User();
        $user->email=$req->email;
        $user->name=$req->name;
        $user->phone=$req->phone;
        $user->address_id=$req->address_id;
        $user->password=Hash::make($req->password);
        $user->save();
        return response()->json(['message'=>'succeded'],200);
    }
    public function login(Request $req)
    {
        
    }

    public function logout(Request $req)
    {
        
    }

}
