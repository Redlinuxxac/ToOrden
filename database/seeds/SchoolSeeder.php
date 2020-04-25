<?php

use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\School::class, 3)->create()->each(function(App\School $school){
            $school->users()->save(factory(App\User::class)->make());
        });
    }
}
