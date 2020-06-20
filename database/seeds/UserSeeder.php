<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(User $user)
    {
        $user->create([
            'name' => 'Josias',
            'email' => 'josias@gmail.com',
            'password' => bcrypt('teste'),
        ]);

        $user->create([
            'name' => 'Carlos',
            'email' => 'carlos@gmail.com',
            'password' => bcrypt('teste'),
        ]);

        $user->create([
            'name' => 'Vitor',
            'email' => 'vitor@gmail.com',
            'password' => bcrypt('teste'),
        ]);
    }
}
