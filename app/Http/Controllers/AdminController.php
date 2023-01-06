<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\AdminService;

class AdminController extends Controller
{
    public function index(AdminService $admin_service)
    {
        return $admin_service->get_users();
    }
}
