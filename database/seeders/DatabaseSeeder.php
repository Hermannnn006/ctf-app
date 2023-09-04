<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Category;
use App\Models\Chalengge;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create([
            'role' => 'user'
        ]);

        Role::create([
            'role' => 'admin'
        ]);

        Role::create([
            'role' => 'super admin'
        ]);

        User::create([
            'name' => 'hermansyah',
            'username' => 'herman',
            'email' => 'herman@gmail.com',
            'role_id' => 1,
            'password' => bcrypt('mypassword')
        ]);

        User::create([
            'name' => 'alucard',
            'username' => 'alucard',
            'email' => 'alucard@gmail.com',
            'role_id' => 2,
            'password' => bcrypt('password9098')
        ]);

        User::create([
            'name' => 'thamuz',
            'username' => 'thamuz',
            'email' => 'thamuz@gmail.com',
            'role_id' => 3,
            'password' => bcrypt('password9098')
        ]);

        User::factory()->count(100)->create();

        Chalengge::create([
            'user_id' => 3,
            'category_id' => 1,
            'name' => 'SQL Injection Menampilkan Versi Database',
            'slug' => 'sql-injection-menampilkan-versi-database',
            'description' => 'Cari tau versi database yang digunakan pada aplikasi berikut menggunakan teknik SQL injection.',
            'answer' => 'FLAG{10.5.20-MariaDB}',
            'point' => 70,
            'clue' => '@@version',
            'link' => 'https://chalenggesctfapps.000webhostapp.com/toko/tampil_barang.php?id=k002'
        ]);

        Category::create([
            'name' => 'Web Security',
            'slug' => 'web-security'
        ]);

        Category::create([
            'name' => 'Digital Forensic',
            'slug' => 'digital-forensic'
        ]);

        Category::create([
            'name' => 'Cryptography',
            'slug' => 'cryptography'
        ]);        
    }
}
