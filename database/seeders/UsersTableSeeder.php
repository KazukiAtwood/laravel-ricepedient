<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Utilisateur non admin
        DB::table('users')->insert([
            'nom' => 'Test',
            'prenom' => 'User',
            'telephone' => '1234567890',
            'genre' => 'Homme',
            'email' => 'test@gmail.com',
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
            'is_admin' => false,
        ]);

        // Utilisateur admin
        DB::table('users')->insert([
            'nom' => 'Admin',
            'prenom' => 'User',
            'telephone' => '0987654321',
            'genre' => 'Femme',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
            'is_admin' => true,
        ]);
    }
}
