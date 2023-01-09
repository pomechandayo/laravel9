<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\AdminEntity;

interface AdminRepositoryInterface
{
  public function get_users(): array;

  public function store(AdminEntity $admin_entity);
}