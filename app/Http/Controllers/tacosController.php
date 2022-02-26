<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tacos;

class tacosController extends Controller
{
    // Mostrar todos los tacos
    public function mostrarTacos(){
        $tacos=  tacos::all();
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Nombre</th>";
        echo "<th>Tortilla</th>";
        echo "<th>Carne</th>";
        echo "<th>Precio</th>";
        echo "</tr>";
        foreach($tacos as $taco){
            echo "<tr>";
            echo "<td>".$taco->id."</td>";
            echo "<td>".$taco->nombre."</td>";
            echo "<td>".$taco->tortilla."</td>";
            echo "<td>".$taco->carne."</td>";
            echo "<td>".$taco->precio."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}
