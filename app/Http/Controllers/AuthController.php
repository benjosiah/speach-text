<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
  
    public function login(Request $request)
    {
        $auth= Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        if($auth){
            return redirect()->route('diary.index');
        }else{
            $user = User::create([
                'name' => 'User',
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);
            $token = auth()->login($user);
            return redirect()->route('diary.index');
        }
    }
  
    // public function login(Request $request)
    // {
    //     $credentials = $request->only(['email', 'password']);
    //     if (!$token = auth()->attempt($credentials)) {
    //         return response()->json(['error' => 'Unauthorized'], 401);
    //     }
    //     return $this->respondWithToken($token);
    // }
  
    public function logout()
    {
        auth()->logout();
        return response()->json(['message' => 'Successfully logged out']);
    }
  
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
