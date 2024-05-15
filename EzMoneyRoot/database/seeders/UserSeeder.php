<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'João Vitor Rodrigues Santos',
            'email' => 'joaovitorrodriguessantos8@gmail.com',
            'password' => bcrypt('123'),
            'phone' => '51 997278160',
            'gender' => 'Masculino',
            'birth' => '2004-05-01',
            'revenue' => '1950.32',
            'expense' => '724.32',
            'balance' => '1226.00'
        ]);
    }
}
