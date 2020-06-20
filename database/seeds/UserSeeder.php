<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(User $user)
    {
        $user->create([
            'name' => 'Josias',
            'email' => 'josias@josiasbarbearia.com.br',
            'password' => bcrypt('teste'),
        ]);

        $user->create([
            'name' => 'Carlos',
            'email' => 'carlos@josiasbarbearia.com.br',
            'password' => bcrypt('teste'),
        ]);

        $user->create([
            'name' => 'Vitor',
            'email' => 'vitor@josiasbarbearia.com.br',
            'password' => bcrypt('teste'),
        ]);
    }
}
