<?php

declare(strict_types=1);

namespace App\Service;

use App\Repository\UserRepositoryInterface;

class UserService
{
  protected $userRepository;
  public function __construct(UserRepositoryInterface $userRepository)
  {
    $this->userRepository = $userRepository;
  }
  public function get_users()
  {
    $user = $this->userRepository->get_users();

    return $user;
  }
}