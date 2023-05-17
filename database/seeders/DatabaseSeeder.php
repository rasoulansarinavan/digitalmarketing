<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserLevelsTableSeeder::class,
            CategoriesTableSeeder::class,
            StatusesTableSeeder::class,
            UsersTableSeeder::class,
            ServicesTableSeeder::class,
            KycsTableSeeder::class,
            FilesTableSeeder::class,
        ]);
    }
}
