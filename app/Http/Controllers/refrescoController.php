<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Refresco;

class refrescoController extends Controller
{
    //
    public function mostrarrefrescos(){
        $refresco= Refresco::all();
        return response()->json(["estatus" => "refresco-feli","refresco" => $refresco]);
    }
}
