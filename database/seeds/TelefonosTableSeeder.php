<?php

use Illuminate\Database\Seeder;

class TelefonosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('telefonos')->delete();//Borrando Contenido de la Tabla

		DB::table('telefonos')->insert([  
			'numero' => '70646573',
			'persona_id' => '1'
	    ]);
		DB::table('telefonos')->insert([  
			'numero' => '70124356',
			'persona_id' => '1'
	    ]);		
		DB::table('telefonos')->insert([  
			'numero' => '60434578',
			'persona_id' => '2'
	    ]);
		
    }
}
