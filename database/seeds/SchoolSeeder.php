<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        //Dias
        DB::insert('insert into days (name) values ( ?)', [ 'Lunes']);                                                            
        DB::insert('insert into days (name) values ( ?)', [ 'Martes']);                                                             
        DB::insert('insert into days (name) values ( ?)', [ 'Miercoles']);                                                            
        DB::insert('insert into days (name) values ( ?)', [ 'Jueves']);                                                            
        DB::insert('insert into days (name) values ( ?)', [ 'Viernes']);                                                            
        DB::insert('insert into days (name) values ( ?)', [ 'Sabado']);                                                            
        DB::insert('insert into days (name) values ( ?)', [ 'Domingo']); 
        // por la prueba voy a inseta materia, periodo estudiatnes y secciones aqui
        
        DB::insert('insert into matters (name) values ( ?)', [ 'Leguan Española']);                                                            
        DB::insert('insert into matters (name) values ( ?)', [ 'Matematicas']);                                                            
        DB::insert('insert into matters (name) values ( ?)', [ 'Ciencias Naturales']);                                                            
        DB::insert('insert into matters (name) values ( ?)', [ 'Ciencias Sociales']);

                                                                    
        DB::insert('insert into periods (name, start_date, end_date) values (?, ?, ?)', [ '2019/2020 1', '2019-08-15' , '2020-06-15' ]);                                                            
        DB::insert('insert into periods (name, start_date, end_date) values (?, ?, ?)', [ '2019/2020 2', '2019-08-15' , '2020-06-15' ]);

    }
}
