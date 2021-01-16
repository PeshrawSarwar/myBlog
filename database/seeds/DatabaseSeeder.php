<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        $this->call([
            // LaratrustSeeder::class,
            // UserSeeder::class,
            SettingSeeder::class,
            ProfileSeeder::class,
            CategorySeeder::class,
            TagSeeder::class,
            PostSeeder::class,
            RelationsSeeder::class,
            CommentSeeder::class,
        ]);
    }
}
