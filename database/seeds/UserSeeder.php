<?php

use App\User;
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
            'name' => 'Admin',
            'email' => 'admin@role.id',
            'password' => bcrypt('12345'),
            'role' => 'admin'
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'Auth',
            'email' => 'auth@role.id',
            'password' => bcrypt('12345'),
            'role' => 'auth'
        ]);

        $user->assignRole('auth');

        $user = User::create([
            'name' => 'Alumni',
            'email' => 'alumni@role.id',
            'password' => bcrypt('12345'),
            'role' => 'alumni'
        ]);

        $user->assignRole('alumni');
    }
}
