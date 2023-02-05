<?php

namespace App\Models;

class ModelFactory
{
    public function get_Admin_Model()
    {
        return new Admin();
    }

    public function get_Department_Model()
    {
        return new Department();
    }
}
