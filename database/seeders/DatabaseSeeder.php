<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Feature;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Package;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Irtaza',
            'email' => 'irtaza@test.com',
            'password' => bcrypt('irtaza@test.com'),
        ]);

        Feature::create([
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTL4sYEFbke9C7MFUWDpLnTMoXPkZNszjQ-tA&usqp=CAU',
            'route_name' => 'feature1.index',
            'name' => 'Calculate Sum',
            'description' => 'Calculate Sum of two number',
            'required_credits' => 1,
            'active' => true,
        ]);

        Feature::create([
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTL4sYEFbke9C7MFUWDpLnTMoXPkZNszjQ-tA&usqp=CAU',
            'route_name' => 'feature2.index',
            'name' => 'Calculate Sum',
            'description' => 'Calculate Sum of two number',
            'required_credits' => 3,
            'active' => true,
        ]);

        Package::create([
            'name' => 'Basic',
            'price' => 5,
            'credits' => 20,
        ]);

        Package::create([
            'name' => 'Silver',
            'price' => 20,
            'credits' => 100,
        ]);

        Package::create([
            'name' => 'Gold',
            'price' => 50,
            'credits' => 500,
        ]);
    }
}