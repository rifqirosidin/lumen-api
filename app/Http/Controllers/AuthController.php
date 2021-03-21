<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\RespondsWithHttpStatus;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    use RespondsWithHttpStatus;


    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        if ($validator->fails()){
            return $this->responseErrorValidation('Create user failed', $validator->errors(),
                Response::HTTP_BAD_REQUEST);
        }

        try{
            User::create([
               'name' => \request('name'),
                'email' => \request('email'),
                'password' => Hash::make(\request('password'))

            ]);
            $this->responseSuccess('Create User Success', $request->all(), Response::HTTP_CREATED);
        }catch (\Exception $exception){
            $this->responseFailure('Create User Failed', Response::HTTP_FAILED_DEPENDENCY);
        }
    }

    public function login()
    {
        $credentials = \request()->only(['email', 'password']);
//        if (! $token = Auth::attempt($credentials)){
//            $this->responseFailure([
//                'message' => 'Unauthorized'
//            ], 401);
//        }
        if (! $token = Auth::attempt($credentials)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

}
