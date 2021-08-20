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
        return view ('departamentos.index', compact('departments','users'));
    }

    public function store(Request $request) {
        $departments = Department::create($request->all());
        return redirect()->route('departamentos');
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
