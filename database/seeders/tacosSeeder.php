<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class tacosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   //nombre de los tacos
        $nombreTacos = ["tripa","suadero","longaniza","cabeza","pastor","campechano","chuleta","bisteck"];
        //tortilla de los tacos
        $tortillaTacos = ["maiz","harina"];
        //carne de los tacos
        $carneTacos = ["puerco","res","borrego"];
        //precio de los tacos
        $precioTacos = [10,15,20];

        for($i = 0;$i<=300;$i++){
             //registro de tacos
            DB::table('tacos')->insert([
                'nombre' => $nombreTacos[rand(0,7)],
                'tortilla' => $tortillaTacos[rand(0,1)],
                'carne' => $carneTacos[rand(0,2)],
                'precio' => $precioTacos[rand(0,2)],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
       
    }
}
