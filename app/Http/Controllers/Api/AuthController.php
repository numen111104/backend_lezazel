<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\ApiResource;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                "name" => "required|string|max:255",
                "email" => "required|string|email|max:255|unique:users",
                "password" => "required|string|min:8",
                "phone" => 'required|string|max:255',
                "address" => 'required|string|max:255',
            ]);

            if ($validator->fails()) {
                $apiResponse = new ApiResource(false, $validator->errors()->first(), null, 400, 'Bad Request', ['WWW-Authenticate' => 'Bearer']);
                return $apiResponse->response();
            }
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'phone' => $request->phone,
                'address' => $request->address
            ]);
            $token = $user->createToken('auth_token')->plainTextToken;
            return new ApiResource(true, 'User created successfully', [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'phone' => $user->phone,
                'address' => $user->address,
                'token' => $token,
                'token_type' => 'Bearer',
            ], 201, 'Created', ['WWW-Authenticate' => 'Bearer']);
        } catch (Exception $e) {
            Log::error('Error registering user: ' . $e->getMessage());
            return new ApiResource(false, "Error registering user: " . $e->getMessage(), null, 500, 'Internal Server Error', ['WWW-Authenticate' => 'Bearer']);
        }
    }

    public function login(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required|min:8',
            ]);
            if ($validator->fails()) {
                return new ApiResource(false, $validator->errors()->first(), null, 422, 'Unprocessable Entity');
            }
            if (!auth()->attempt($request->only('email', 'password'))) {
                return new ApiResource(false, 'Invalid login details', null, 401, 'Unauthorized', ['WWW-Authenticate' => 'Bearer']);
            }
            $user = User::where('email', $request->email)->first();
            if ($user && Hash::check($request->password, $user->password)) {
                $token = $user->createToken('auth_token')->plainTextToken;
                return new ApiResource(true, 'User logged in successfully', [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'phone' => $user->phone,
                    'address' => $user->address,
                    'token' => $token,
                    'token_type' => 'Bearer',
                ], 200, 'OK', ['WWW-Authenticate' => 'Bearer']);
            } else {
                return new ApiResource(false, 'Invalid login details', null, 401, 'Unauthorized', ['WWW-Authenticate' => 'Bearer']);
            }
        } catch (Exception $e) {
            return new ApiResource(false, 'Error logging in: ' . $e->getMessage(), null, 500, 'Internal Server Error', ['WWW-Authenticate' => 'Bearer']);
        }
    }

    public function logout(Request $request)
    {
        try {
            $request->user()->currentAccessToken()->delete();
            return new ApiResource(true, 'Successfully logged out', null, 200, 'Success', ['WWW-Authenticate' => 'Bearer']);
        } catch (\Exception $e) {
            return new ApiResource(false, 'Error logging out: ' . $e->getMessage(), null, 500, 'Error', ['WWW-Authenticate' => 'Bearer']);
        }
    }
}
