<?php

use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for ($i=0; $i <5 ; $i++) { 
        DB::table('hotels')->insert([
            'nombre' => str_random(10),
            'direccion' => str_random(10),
            'categoria' => random_int(0,10),
            'completo' => true,
            'antiguedad' => Date('2018-12-25')
        
        ]);
         
       }
      
    }
}
