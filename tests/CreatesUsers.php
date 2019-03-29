<?php

namespace Tests;

use App\Users;
use App\Admin;

trait CreatesUsers
{
    protected function loginAsUser($attributes = []): User
    {
        $user = $this->createUser($attributes);

        $this->actingAs($user);

        return $user;
    }

    protected function loginAsAdmin($attributes = []): Admin
    {
        $admin = $this->createAdmin($attributes);

        $this->actingAs($admin, 'admin');

        return $admin;
    }

    protected function CreateUser(array $attributes = []): User
    {
        return factory(User::class)->create(array_merge([
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com',
            'password' => bcryp('password')
        ]), $attributes);
    }

    protected function CreateAdmin(array $attributes = []): Admin
    {
        return factory(Admin::class)->create(array_merge([
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com',
            'password' => bcrypt('password'),
            'job_title' => 'Admin'
        ]), $attributes);
    }
}

