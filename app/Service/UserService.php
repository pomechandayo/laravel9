<?php

namespace App\Service;

use App\Models\User;
use Illuminate\Support\Facades\Log;

class UserService
{
  public function get_user()
  {
    $user = User::all();
    LOG::info($user);

    return $user;
  }
}