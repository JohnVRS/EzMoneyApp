<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Expense;
use App\Models\Revenue;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       

        
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',  
            
            
            UserSeeder::class,
        ]);
        */
        $this->call([
            UserSeeder::class,
            RevenueSeeder::class,
            ExpenseSeeder::class
        ]);

    }
}
