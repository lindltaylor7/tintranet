<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;

class areaController extends Controller
{
    public function index() {
        $areas = Area::all();
        $users = User::all();
        $departments = Department::all();
        return view('area.index', compact('areas', 'users', 'departments'));
    }

    public function store(Request $request) {
        $department = Area::create($request->all());
        return redirect()->route('area'); 
    }

    public function update(Request $request, Area $id) {
        $id->name = $request->name;
        $id->status = $request->status;
        $id->department_id = $request->department;
        $id->save();
        return redirect()->route('area'); 
    }

    public function destroy(Area $id) {
        $id->delete();
        return redirect()->route('area');
    }
}
