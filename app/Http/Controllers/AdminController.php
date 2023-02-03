<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\AdminService;
use App\Models\ModelFactory;

class AdminController extends Controller
{
    private $model_factory;

    public function __construct() 
    {
        $this->model_factory = new ModelFactory();
    }
    /**
     * @param array{ num: int } $ary
     */
    public function index(AdminService $admin_service, array $ary) : AdminService
    {
        return $admin_service->get_users();
    }
    
    public function store(AdminService $admin_service, Request $request)
    {
        return $admin_service->store($request->input('name'));
    }

    public function get_user() {
        return $this->model_factory->get_Admin_Model()->get();
    }
}
