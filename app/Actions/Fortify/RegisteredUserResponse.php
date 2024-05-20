<?php
namespace App\Actions\Fortify;


use Illuminate\Http\JsonResponse;
use Laravel\Fortify\Contracts\RegisterResponse as RegisterResponseContract;

class RegisteredUserResponse implements RegisterResponseContract
{
    public function toResponse($request)
    {
        return $request->wantsJson()
                    ? new JsonResponse('', 201)
                    : redirect()->route('login');
    }
}
