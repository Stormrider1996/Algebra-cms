<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->withPersonalTeam()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'role' => 'admin',
        ]);
        
    }
}
