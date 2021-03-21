<?php
namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait RespondsWithHttpStatus{

    protected function responseSuccess($message, $data = [], $status = 200)
    {
        return response([
            'success' => true,
            'data' => $data,
            'message' => $message,
        ], $status);
    }

    protected function responseFailure($message, $status = 422)
    {
        return response([
            'success' => false,
            'message' => $message,
        ], $status);
    }

    protected function responseErrorValidation($message, $errors = [], $status = 400)
    {
        return response([
            'success' => false,
            'message' => $message,
            'errors' => $errors
        ], $status);
    }

    //Add this method to the Controller class
    protected function respondWithToken($token)
    {
        return response()->json([
            'token' => $token,
            'token_type' => 'bearer',
            'expires_in' => Auth::factory()->getTTL() * 60
        ], 200);
    }
}
