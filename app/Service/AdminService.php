<?php

declare(strict_types=1);

namespace App\Service;

use App\Repository\AdminRepositoryInterface;
use App\Entity\AdminEntity;

class AdminService
{
  protected $admin_repository;
  public function __construct(AdminRepositoryInterface $admin_repository)
  {
    $this->admin_repository = $admin_repository;
  }
  public function get_users()
  {
    $user = $this->userRepository->get_users();

    return $user;
  }

  public function store(string $name): int
  {
    return $this->admin_repository->store(new AdminEntity(null, $name));
  }
}