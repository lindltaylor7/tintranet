<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class departmentController extends Controller
{
    public function index() {
        $users = User::find(Auth::id());
        $departments = Department::all(); 
        // return $departments;
        return view ('departamentos.departamentos', compact('departments','users'));
    }

    public function create() {
        $departments = Department::all(); 
        return view ('departamentos.create', compact('departments'));
    }   

    public function store(Request $request) {
        $departments = new Department;
        $departments->name = $request->name;
        $departments->status = $request->status;
        $departments->save();
        return redirect()->route('departamentos');
    }

    public function edit(Department $id) {
        return view ('departamentos.editar',compact ('id'));
    }

    public function update(Request $request, Department $id) {
        $id->name = $request->name;
        $id->status = $request->status;
        $id->save();
        return redirect()->route('departamentos');
    }

    public function destroy(Department $id) {
        $id->delete();   
        return redirect()->route('departamentos');
    }  
}