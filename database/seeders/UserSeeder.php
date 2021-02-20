<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin Tukau',
            'email' => 'admin@mail.com',
            'password' => bcrypt('admin1234')
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'User 1',
            'email' => 'user@mail.com',
            'password' => bcrypt('user1234')
        ]);

        $user->assignRole('user');
    }
}
