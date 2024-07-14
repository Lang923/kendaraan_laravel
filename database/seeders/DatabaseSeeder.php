<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Default Breeze Laravel 
        User::factory()->create([
            'name' => 'Herlangga',
            'email' => 'herlangga576@gmail.com',
        ]);

        // // Membuat Role Admin
        // Role::create(['name' => 'admin']);

        // // Membuat role user
        // Role::create(['name' => 'user']);
    }
}
