<?php

namespace App\Models;

use App\Models\Admin;
use App\Models\Department;

class ModelFactory {

  
  public function get_Admin_Model() {
    return new Admin();
  }

  public function get_Department_Model() {
    return new Department();
  }
}