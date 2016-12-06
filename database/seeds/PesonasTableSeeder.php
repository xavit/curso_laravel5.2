<?php

use Illuminate\Database\Seeder;

class PesonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('personas')->delete();//Borrando Contenido de la Tabla

    	DB::table('personas')->insert([    		
    		'name' => 'Hugo',
    		'last_name' => 'Zegarrundo',
    		'ci' => '452354',
    		'apodo' => 'huguito'
        ]);

    	DB::table('personas')->insert([    		
    		'name' => 'Fernando',
    		'last_name' => 'Averanga',
    		'ci' => '754535',
    		'apodo'=> 'fer'
        ]);
    }
}
