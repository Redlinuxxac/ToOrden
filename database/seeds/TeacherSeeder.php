<?php

use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {         
        factory(App\Teacher::class, 12)->create()->each(function(App\Teacher $Teacher){
            $Teacher->phones()->save(factory(App\Phone::class)->make());
            $Teacher->addresses()->save(factory(App\Address::class)->make());
            $Teacher->emails()->save(factory(App\Email::class)->make());
        });
    }
}
