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

        
         //registro de tacos
         DB::table('tacos')->insert([
        [
            'nombre' => 'tripa',
            'tortilla' => 'maiz',
            'carne' => 'res',
            'precio' => $precioTacos[rand(0,2)],
            'imagen' => 'https://img.chilango.com/2014/05/taquito-de-tripa.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ],
        [
            'nombre' => 'suadero',
            'tortilla' => 'maiz',
            'carne' => 'puerco',
            'precio' => $precioTacos[rand(0,2)],
            'imagen' => 'https://cdn2.cocinadelirante.com/sites/default/files/styles/gallerie/public/images/2017/07/tacosdesuadero2.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ],
        [
            'nombre' => 'longaniza',
            'tortilla' => 'maiz',
            'carne' => 'puerco',
            'precio' => $precioTacos[rand(0,2)],
            'imagen' => 'http://www.comidamexicana.com/libraries/forms/2/imagesfiles/20140211093804_470x340.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ],
        [
            'nombre' => 'cabeza',
            'tortilla' => 'maiz',
            'carne' => 'borrego',
            'precio' => $precioTacos[rand(0,2)],
            'imagen' => 'https://www.cocinavital.mx/wp-content/uploads/2018/12/taco-cabeza.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ],
        [
            'nombre' => 'pastor',
            'tortilla' => 'maiz',
            'carne' => 'puerco',
            'precio' => $precioTacos[rand(0,2)],
            'imagen' => 'https://www.gastrolabweb.com/u/fotografias/m/2020/5/9/f800x450-59_51505_5050.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ],
        [
            'nombre' => 'campechano',
            'tortilla' => 'harina',
            'carne' => 'puerco',
            'precio' => $precioTacos[rand(0,2)],
            'imagen' => 'https://img.chilango.com/2014/10/super-campechano.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ],
        [
            'nombre' => 'chuleta',
            'tortilla' => 'maiz',
            'carne' => 'puerco',
            'precio' => $precioTacos[rand(0,2)],
            'imagen' => 'https://img.chilango.com/2014/10/super-campechano.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ],
        [
            'nombre' => 'bisteck',
            'tortilla' => 'harina',
            'carne' => 'res',
            'precio' => $precioTacos[rand(0,2)],
            'imagen' => 'https://cheforopeza.com.mx/wp-content/uploads/2020/11/tacos-de-bistec-a-la-cerveza-940x450.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]
         ]);
    
       
    }
}
