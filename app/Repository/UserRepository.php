<?php

declare(strict_types=1);

namespace App\Repository;

use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function get_users(): array
    {
        $user = User::all()->toArray();

        return $user;
    }
}
