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
        factory(App\Student::class, 100)->create()->each(function(App\Student $student){
            $student->phones()->save(factory(App\Phone::class)->make());
            $student->addresses()->save(factory(App\Address::class)->make());
            $student->emails()->save(factory(App\Email::class)->make());
        });
    }
}
