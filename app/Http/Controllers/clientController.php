<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class clientController extends Controller
{
    public function index () {
        $clients = Client::all();
        return view('clientes.index', compact('clients'));  
    }
    
    public function store (Request $request) {
        $request->merge([
            'status' => 1
        ]);
        $clientes = Client::create($request->all());
        return redirect()->route('clientes');  
    }

    public function destroy (Client $id) {
        $id->delete();
        return redirect()->route('clientes');
    }

    public function update (Request $request, Client $id) {
        $id->name = $request->name;
        $id->phone = $request->phone;
        $id->email = $request->email;
        $id->save();
        return redirect()->route('clientes');
    }
}
