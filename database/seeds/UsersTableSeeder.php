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
            'password'       => '$2y$10$ZSh6K4vIaByJIBTIXhyI5eyk47TgK.XGRzsheCG9FPD3Ioq0Fq0Mm',
            'remember_token' => null,
            'created_at'     => '2019-05-15 13:26:46',
            'updated_at'     => '2019-05-15 13:26:46',
            'deleted_at'     => null,
        ]];

        User::insert($users);
    }
}
