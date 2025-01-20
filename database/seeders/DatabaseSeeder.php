<?php

namespace Database\Seeders;

use App\Models\FinanceCategory;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $financeCategories = [
            ['FnB','red'],
            ['Groceries','green'],
            ['Transport','blue'],
        ];
        foreach($financeCategories as $fc){
            FinanceCategory::create([
                'name'=>$fc[0],
                'color'=>$fc[1],
            ]);
        }

    }
}
