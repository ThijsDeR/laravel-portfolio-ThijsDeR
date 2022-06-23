<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'username' => 'TeaEyes',
                'password' => Hash::make('password'),
                'admin' => true
            ],
            [
                'username' => 'admin',
                'password' => Hash::make('password'),
                'admin' => true
            ],

        ];

        foreach($users as $user) {
            User::create($user);
        }
    }
}
