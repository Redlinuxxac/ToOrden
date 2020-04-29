<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Student::class, 3)->create()->each(function(App\Student $student){
            $student->users()->save(factory(App\User::class)->make());
        });
    }
}
