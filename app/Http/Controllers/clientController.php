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

    public function create () {
        return view('clientes.register'); 
    }
    
    public function store (Request $request) {
        $clientes = Client::create($request->all());
        return redirect()->route('clientes');  
    }

    public function destroy (Client $id) {
        $id->delete();
        return redirect()->route('clientes');
    }

    public function edit (Client $id) {
        return view('clientes.update', compact('id'));
    }

    public function update (Request $request, Client $id) {
        $id->name = $request->name;
        $id->phone = $request->phone;
        $id->email = $request->email;
        $id->status = $request->status;
        $id->save();
        return redirect()->route('clientes');
    }
}
