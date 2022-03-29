<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
      $foundUser = User::where('email', $request->email)->first();

      if($foundUser){
        if (Hash::check($request->password, $foundUser->password))
        {
          return response()->json(['success' => true, 'user' => $foundUser]);
        }
      }
      return response()->json(['success' => false, 'message' => 'Incorrect Email or Password']);
    }

    public function register(Request $request)
    {
      $foundUser = User::where('email', $request->email)->first();
      if($foundUser){
        return response()->json(['success' => false, 'message' => 'User with this email already exists']);
      }
      $user = new User;
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = Hash::make($request->password);
      if($user->save()){
        return response()->json(['success' => true, 'user' => $user]);
      }

      return response()->json(['success' => false, 'message' => 'Some error occurred']);
    }
}
