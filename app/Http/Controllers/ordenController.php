<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orden;
use App\Http\Requests\guardarordenRequest;

class ordenController extends Controller
{
    public function store(guardarordenRequest $request){
        Orden::create($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'orden guardada'
        ]);
    }
}
