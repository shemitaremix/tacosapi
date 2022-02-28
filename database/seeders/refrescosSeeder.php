<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class refrescosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //nombre del refresco
        $nombreRefresco = ["lulu","boing","jarrito","sidral-mundet","pepsi","fanta"];
        //sabor del refresco
        $saborRefresco = ["toronja","manzanita","fresa","naranja","tuti-fruti","pera"];
        //distribuidora de los refrescos
        $distribuidoraRefresco =["coca-cola","pepsi"];
        //tamaño del refresco
        $tamañoRefresco = [600,500,1000];
        //precio del refresco
        $precioRefresco = [12,15,20];

        for($r = 0;$r<=300;$r++){
            DB::table('refrescos')->insert([
                'nombre' => $nombreRefresco[rand(0,5)],
                'sabor' => $saborRefresco[rand(0,5)],
                'distribuidora' => $distribuidoraRefresco[rand(0,1)],
                'tamaño' => $tamañoRefresco[rand(0,2)],
                'precio' => $precioRefresco[rand(0,2)],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
    }
}
