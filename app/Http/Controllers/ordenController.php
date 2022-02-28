<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orden;
use App\Http\Requests\guardarordenRequest;
use App\Http\Requests\actializarordenRequest;

class ordenController extends Controller
{
    //guardar en la base de datos la orden de tacos
    public function store(guardarordenRequest $request){
        Orden::create($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'orden guardada'
        ],200);
    }

    //ver una orden en lo especial de la taqueria
    public function show(Orden $orden)
    {
        return response()->json([
            'res'=> true,
            'orden' => $orden
        ],200);
    }
    
    //actualizar algun dato de una orden
    public function update(actializarordenRequest $request,Orden $orden){
        $orden->update($request->all());
        return response()->json([
            'res' => true,
            'mensaje' => 'orden actualizada de manera correcta'
        ],200);
    }

}
