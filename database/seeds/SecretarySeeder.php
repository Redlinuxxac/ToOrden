<?php

use Illuminate\Database\Seeder;

class SecretarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {         
        factory(App\Secretary::class, 3)->create()->each(function(App\Secretary $secretary){
            $secretary->phones()->save(factory(App\Phone::class)->make());
            $secretary->addresses()->save(factory(App\Address::class)->make());
            $secretary->emails()->save(factory(App\Email::class)->make());
        });
    }
}
