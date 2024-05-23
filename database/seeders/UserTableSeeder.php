<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => "Nu'man Nasyar MZ",
            'email' => 'numannasyarmz11gmail.com',
            'password' => bcrypt('Tidore11'),
            'roles' => 'ADMIN',
            'email_verified_at' => now()
        ]);

        User::create([
            'name' => "Haidar Miqdad",
            'email' => 'haidarmiqdad@icloud.com',
            'password' => bcrypt('12345678'),
            'roles' => 'ADMIN',
            'email_verified_at' => now()
        ]);
        User::create([
            'name' => "Lezazel",
            'email' => 'lezazelf@gmail.com',
            'password' => bcrypt('lezazelfood'),
            'roles' => 'ADMIN',
            'email_verified_at' => now()
        ]);

        
    }
}
