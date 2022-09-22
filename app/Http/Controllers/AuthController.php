<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Error;

class AuthController extends Controller
{
   public function register(Request $request) {
    $fields = $request->validate([
        'name' => 'required',
        'email' => 'required|unique:users,email',
        'password' => 'required|confirmed'
    ]);
    // return response(request());
    // if ($request->validate->fails()
    // ) {
    //    return response()
    // };



    $user = User::create([
        'name' => $fields['name'],
        'email' => $fields['email'],
        'password' => bcrypt($fields['password'])
    ]);
    $token = $user->createToken('mytoken')->plainTextToken;
    $response = [
        'message' => 'Success',
        'user' => $user,
        'token' => $token
    ];
    return response ($response);

   }


   public function login(Request $request) {
    $fields = $request->validate([
        'email' => '',
        'password' => ''
    ]);
    $user = User::where('email',  $fields['email'])->first();
        if(!$user || !Hash::check($fields['password'], $user->password))
        {
return response([

    'Message' => 'Wrong password or email'
]);

}

    $token = $user->createToken('mytoken')->plainTextToken;
    $response = [
        'Message' => 'Success',
        'user' => $user,
        'token' => $token
    ];
    return response ($response, 201);
   }

//    public function logout(Request $request) {
//         auth()->user()->tokens()->delete();

//         return[
//             'message' => 'Logged Out Successfully'
//         ];
//    }
}
