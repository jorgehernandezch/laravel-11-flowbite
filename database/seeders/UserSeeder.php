<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Root',
            'email' => 'root@root.com',
            'password' => Hash::make('Root')
        ])->assignRole('root');

        Profile::create([
            'user_id' => $user->id
        ]);

        $user1 = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('Admin')
        ])->assignRole('admin');

        Profile::create([
            'user_id' => $user1->id
        ]);

        $user2 = User::create([
            'name' => 'Jorge Edo. Hernández',
            'email' => 'jorge@galpha.co',
            'password' => Hash::make('123.abc*')
        ])->assignRole('user');

        Profile::create([
            'user_id' => $user2->id
        ]);
    }
}
