<?php
declare(strict_types=1);

namespace App\Repository;
use App\Models\Admin;

class AdminRepository implements UserRepositoryInterface
{
  public function get_users(): array
  {
    $admin = Admin::all()->toArray();
    return $admin;
  }
}