<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface 
{
    public function getAllUsers() 
    {
        return User::get();
    }

    public function getUserById($id) 
    {
        return User::findOrFail($id);
    }

    public function deleteUser($id) 
    {
        User::destroy($id);
    }

    public function createUser(array $userDetails) 
    {
        return User::create($userDetails);
    }

    public function updateUser($id, array $newDetails) 
    {
        return User::whereId($id)->update($newDetails);
    }
}