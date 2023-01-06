<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\UserService;

class UserController extends Controller
{
    public function index(UserService $user_service)
    {
        return $user_service->get_users();
    }
}
