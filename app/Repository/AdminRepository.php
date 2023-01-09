<?php
declare(strict_types=1);

namespace App\Repository;
use App\Models\Admin as EloquantAdmin;
use App\Entity\AdminEntity;

class AdminRepository implements AdminRepositoryInterface
{
  private $eloquant_admin;
  public function __construct(EloquantAdmin $eloquant_admin)
  {
    $this->eloquant_admin = $eloquant_admin;
  }
  public function get_users(): array
  {
    $admin = Admin::all()->toArray();
    return $admin;
  }

  public function store(AdminEntity $admin_entity): int
  {
    $admin = $this->eloquant_admin->create(['name' => $admin_entity->get_name()]);
    return $admin->id;
  }
}