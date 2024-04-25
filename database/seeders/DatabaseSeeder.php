<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        // \App\Models\Role::create(['name'=>'admin']);
        // \App\Models\Role::create(['name'=>'admin']);

        \App\Models\User::factory()->create([
            'name' => 'User',
            'email' => 'user@gmail.com',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
        ]);
        \App\Models\Role::create([
            'name'=>'Admin',
            'description'=>'admin role',
        ]);
        \App\Models\Role::create([
            'name'=>'user',
            'description'=>'user role',
        ]);
        \App\Models\Permission::create([
            'name'=>'add_user',
            'description'=>'user can add new user',
        ]);
        \App\Models\Permission::create([
            'name'=>'view_user',
            'description'=>'user can view the user info',
        ]);
        $this->call(LeadAssign::class);
        
    }
}
