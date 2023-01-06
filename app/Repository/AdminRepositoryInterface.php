<?php

declare(strict_types=1);

namespace App\Repository;

interface AdminRepositoryInterface
{
  public function get_users(): array;
}