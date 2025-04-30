<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Laravel\Prompts\Concerns\Events;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Admin::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('secret')
        ]);

        // User::factory()->create([
        //     'name' => 'Donny Hilton',
        //     'email' => 'donny@example.com',
        //     'password' => Hash::make('markspain')
        // ]);

        Events::create(['admin_id' => 1, 'title' => 'Asa Sing Along Date Night', 'date' => '12/10/2025', 'time' => '23:00', 'location' => 'O2arena London', 'Description' => 'Come sing with Asa with that special someone, Dress code being yourself', 'hero_image' => 'image/events/o2arena.png', 'map_link' => 'https://example.com']);
    }
}
