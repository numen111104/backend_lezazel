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
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                "name" => "required|string|max:255",
                "username" => "required|string|max:255|unique:users,username",
                "email" => "required|string|email|max:255|unique:users,email",
                "gender" => "required|string|max:255|in:Male,Female",
                "phone" => 'nullable|string|max:255|unique:users,phone',
                "password" => 'required|string|min:8',
            ]);

            if ($validator->fails()) {
                throw new ValidationException($validator);
            }
            User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'phone' => $request->phone,
                'gender' => $request->gender,
                'password' => bcrypt($request->password),
            ]);
            $user = User::where('email', $request->email)->first();
            $token = $user->createToken('auth_token')->plainTextToken;
            return new ApiResource(true, 'User created successfully', [
                'token' => $token,
                'token_type' => 'Bearer',
                'user' => $user,
            ], 201, 'Created', ['WWW-Authenticate' => 'Bearer']);
        } catch (Exception $e) {
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
                throw new ValidationException($validator);
            }
            if (!auth()->attempt($request->only('email', 'password'))) {
                return new ApiResource(false, 'Invalid login details', null, 401, 'Unauthorized', ['WWW-Authenticate' => 'Bearer']);
            }
            $user = User::where('email', $request->email)->first();
            if ($user && Hash::check($request->password, $user->password)) {
                $token = $user->createToken('auth_token')->plainTextToken;
                return new ApiResource(true, 'User logged in successfully', [
                    'token' => $token,
                    'token_type' => 'Bearer',
                    'user' => $user,
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
