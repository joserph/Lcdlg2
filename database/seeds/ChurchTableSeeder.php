<?php

use Illuminate\Database\Seeder;

class ChurchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        date_default_timezone_set('America/Caracas');
        DB::table('church')->insert([
        	'nombre'		=> 'Nombre de la iglesia',
        	'lema'			=> 'Lema de la iglesia',
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
    }
}
