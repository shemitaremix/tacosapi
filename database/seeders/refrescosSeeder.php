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

       
            DB::table('refrescos')->insert([
                [
                    'nombre' => 'lulu',
                    'sabor' => 'manzana',
                    'distribuidora' => 'pascual',
                    'tamaño' => $tamañoRefresco[rand(0,2)],
                    'precio' => $precioRefresco[rand(0,2)],
                    'imagen' => 'https://kiwikmercadofacil.com/wp-content/uploads/2021/11/Lulu3ltsManzana.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'nombre' => 'lulu',
                    'sabor' => 'fresa',
                    'distribuidora' => 'pascual',
                    'tamaño' => $tamañoRefresco[rand(0,2)],
                    'precio' => $precioRefresco[rand(0,2)],
                    'imagen' => 'https://mx.all.biz/img/mx/catalog/24810.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'nombre' => 'lulu',
                    'sabor' => 'uva',
                    'distribuidora' => 'pascual',
                    'tamaño' => $tamañoRefresco[rand(0,2)],
                    'precio' => $precioRefresco[rand(0,2)],
                    'imagen' => 'https://animalgourmet.com/wp-content/uploads/2017/04/1491866629543-7-Firma-Lulu-botella-e1492291395218.jpeg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'nombre' => 'boing',
                    'sabor' => 'mango',
                    'distribuidora' => 'pascual',
                    'tamaño' => $tamañoRefresco[rand(0,2)],
                    'precio' => $precioRefresco[rand(0,2)],
                    'imagen' => 'https://alchef.novadistex.com/wp-content/uploads/2020/10/00000007500310L.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'nombre' => 'boing',
                    'sabor' => 'guayaba',
                    'distribuidora' => 'pascual',
                    'tamaño' => $tamañoRefresco[rand(0,2)],
                    'precio' => $precioRefresco[rand(0,2)],
                    'imagen' => 'https://cdn.shopify.com/s/files/1/0706/6309/products/00019836100761_A1R1_720x.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'nombre' => 'boing',
                    'sabor' => 'fresa',
                    'distribuidora' => 'pascual',
                    'tamaño' => $tamañoRefresco[rand(0,2)],
                    'precio' => $precioRefresco[rand(0,2)],
                    'imagen' => 'https://res.cloudinary.com/walmart-labs/image/upload/w_960,dpr_auto,f_auto,q_auto:best/gr/images/product-images/img_large/00000007500316L.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'nombre' => 'jarrito',
                    'sabor' => 'tutifruti',
                    'distribuidora' => 'jarrito',
                    'tamaño' => $tamañoRefresco[rand(0,2)],
                    'precio' => $precioRefresco[rand(0,2)],
                    'imagen' => 'https://res.cloudinary.com/walmart-labs/image/upload/w_960,dpr_auto,f_auto,q_auto:best/gr/images/product-images/img_large/00074488640505L.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'nombre' => 'jarrito',
                    'sabor' => 'piña',
                    'distribuidora' => 'jarrito',
                    'tamaño' => $tamañoRefresco[rand(0,2)],
                    'precio' => $precioRefresco[rand(0,2)],
                    'imagen' => 'https://res.cloudinary.com/walmart-labs/image/upload/w_960,dpr_auto,f_auto,q_auto:best/gr/images/product-images/img_large/00750144160412L.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'nombre' => 'jarrito',
                    'sabor' => 'mandarina',
                    'distribuidora' => 'jarrito',
                    'tamaño' => $tamañoRefresco[rand(0,2)],
                    'precio' => $precioRefresco[rand(0,2)],
                    'imagen' => 'https://res.cloudinary.com/walmart-labs/image/upload/w_960,dpr_auto,f_auto,q_auto:best/gr/images/product-images/img_large/00750144160411L.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'nombre' => 'pepsi',
                    'sabor' => 'aguanegra',
                    'distribuidora' => 'pepsi',
                    'tamaño' => $tamañoRefresco[rand(0,2)],
                    'precio' => $precioRefresco[rand(0,2)],
                    'imagen' => 'https://cdn.shopify.com/s/files/1/0706/6309/products/0750103131001L2_720x.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'nombre' => 'mirinda',
                    'sabor' => 'mandarina',
                    'distribuidora' => 'pepsi',
                    'tamaño' => $tamañoRefresco[rand(0,2)],
                    'precio' => $precioRefresco[rand(0,2)],
                    'imagen' => 'https://res.cloudinary.com/walmart-labs/image/upload/w_960,dpr_auto,f_auto,q_auto:best/gr/images/product-images/img_large/00750103134505L.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'nombre' => 'coca-cola',
                    'sabor' => 'aguanegra',
                    'distribuidora' => 'coca-cola',
                    'tamaño' => $tamañoRefresco[rand(0,2)],
                    'precio' => $precioRefresco[rand(0,2)],
                    'imagen' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f6/15-09-26-RalfR-WLC-0098.jpg/238px-15-09-26-RalfR-WLC-0098.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'nombre' => 'fresca',
                    'sabor' => 'toronja',
                    'distribuidora' => 'coca-cola',
                    'tamaño' => $tamañoRefresco[rand(0,2)],
                    'precio' => $precioRefresco[rand(0,2)],
                    'imagen' => 'https://res.cloudinary.com/walmart-labs/image/upload/w_960,dpr_auto,f_auto,q_auto:best/gr/images/product-images/img_large/00750105532015L.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],

                

            ]);
        
    }
}
