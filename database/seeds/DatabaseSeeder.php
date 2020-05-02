<?php

use App\Headmaster;
use App\Secretary;
use App\Teacher;
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
         $this->call(SchoolSeeder::class);
         $this->call(HeadmasterSeeder::class);
         $this->call(SecretarySeeder::class);
         $this->call(TeacherSeeder::class);
         $this->call(StudentSeeder::class);
        // $this->call(UserSeeder::class);
    }
}
