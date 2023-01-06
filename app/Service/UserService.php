<?php

declare(strict_types=1);

namespace App\Service;

use Illuminate\Support\Facades\Log;
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
    LOG::info($user);

    return $user;
  }
}