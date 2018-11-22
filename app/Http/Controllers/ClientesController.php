<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClientesController extends Controller
{
    function index(){
        $clientes = Cliente::all();
        return view ('cliente.index',['clientes' => $clientes]);

    }
    function list($id){
        $clientes=Cliente::find($id);
        return view ('reserva.list',['clientes'=>$clientes]);
    }
}
