<?php

use Illuminate\Database\Seeder;
use App\Headmaster;

class HeadmasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('es_VE'); 
        
        factory(App\Headmaster::class, 3)->create()->each(function(App\Headmaster $Headmaster){
            $Headmaster->phones()->save(factory(App\Phone::class)->make());
            $Headmaster->addresses()->save(factory(App\Address::class)->make());
            $Headmaster->emails()->save(factory(App\Email::class)->make());
        });
    }
}
