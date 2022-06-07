<?php

namespace Database\Seeders;

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
        $this->call([
            QuartileSeeder::class,
            CourseSeeder::class,
            EcSeeder::class,
            ExamSeeder::class,
            FaqSeeder::class,
            UserSeeder::class
        ]);
    }
}
