<?php

namespace App\Http\Controllers;

use App\Service\UserService;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function index(UserService $user_service)
    {
        return $user_service->get_users();
    }

    public function get_users(UserService $user_service)
    {
        Log::info(123);
        Log::info(Gate::allows('user-access'));
        if (Gate::allows('user-access')) {
            return $user_service->get_users();
        } else {
            return response()->json('Not approved');
        }
    }
}
