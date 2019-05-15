<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'id'             => 1,
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => '$2y$10$DxJmGio2xcV3HnZYQ4igBOdkadvFaY3tDWgQ5uNvP54uVzpQmQCeS',
            'remember_token' => null,
            'created_at'     => '2019-05-15 14:00:51',
            'updated_at'     => '2019-05-15 14:00:51',
            'deleted_at'     => null,
            'approved'       => 1,
            'verified'       => 1,
            'verified_at'    => '2019-05-15 14:00:51',
        ]];

        User::insert($users);
    }
}
