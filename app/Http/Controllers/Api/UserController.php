<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Resources\ApiResource;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function fetch(Request $request)
    {
        $user = $request->user();

        if (!$user) {
            return new ApiResource(
                false,
                'Unauthorized',
                null,
                401,
                'Unauthorized',
                ['WWW-Authenticate' => 'Bearer']
            );
        }

        return new ApiResource(
            true,
            'User fetched successfully',
            ['user' => $user],
            200,
            'Ok',
            ['WWW-Authenticate' => 'Bearer']
        );
    }

    public function updateProfile(Request $request)
    {
        try {
            $data =  $request->validate([
                'name' => 'required|string|max:255',
                'username' => 'required|string|max:255|unique:users,username,' . $request->user()->id,
                'gender' => 'required|string|max:255|in:Male,Female',
                'email' => 'required|string|email|max:255|unique:users,email,' . $request->user()->id,
                'password' => 'required|string|min:8',
                'phone' => 'nullable|string|max:255',
            ]);

            if (validator($data)->fails()) {
                throw new ValidationException($data);
            }
            $user = Auth::user();
            $user->update($data);

            return new ApiResource(true, 'User updated successfully', ['user' => $user], 200, 'Ok', ['WWW-Authenticate' => 'Bearer']);
        } catch (\Throwable $th) {
            return new ApiResource(false, $th->getMessage(), null, 500, 'Internal Server Error', ['WWW-Authenticate' => 'Bearer']);
        }
    }
}
