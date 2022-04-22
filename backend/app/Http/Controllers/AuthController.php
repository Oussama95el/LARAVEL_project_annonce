<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class AuthController extends Controller
{
    //
    public function register(Request $request){
        $fields = $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
             'email' => 'required|string|unique:users,email',
            'password' => 'required|string'
        ]);
        $user = User::create([
            'nom' => $fields['nom'],
            'prenom'=> $fields['prenom'],
            'email'=> $fields['email'],
            'password'=> bcrypt($fields['password'])
        ]);
//        $token = $user->createToken('applicationToken')->plainTextToken;

//        $response = [
//            'user' => $user,
//            'token' => $token
//        ];
        return json_encode($user);
    }
    public function test(){
        return 'hello';
    }
    public function login(Request $request){
        $fields = $request->validate([
             'email' => 'required|string',
            'password' => 'required|string'
        ]);
        // check email
        $user = User::where('email', $fields['email'])->first();

        // check password
        if ( !$user || !Hash::check($fields['password'], $user->password) ){
                $response = response ([
                    'message' => 'Bad credentials'
                ],401);
                return json_encode($response);
            }else {
            $token = $user->createToken('applicationToken')->plainTextToken;
            $logged = [
                'user' => $user,
                'token' => $token
            ];
            return json_encode($logged);
        }


        $token = $user->createToken('applicationToken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];
        return response($response,201);
    }
    public function logout(){
            auth('sanctum')->user()->tokens()->delete();
            return json_encode([
                'message' => 'token destroyed'
            ],200);
        }
}
