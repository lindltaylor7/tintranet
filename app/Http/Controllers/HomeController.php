<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Client;
use App\Models\Department;
use App\Models\Goal;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::all();
        $users = User::find(Auth::id());
        $projects = Project::all();
        $areas = Area::all();
        $goals = Goal::orderBy('id','desc')->get();
        $clients = Client::all();
        if (Auth::user()->roles->first()->name == 'Administrador') {
            $projects = Project::all();
        } else if (Auth::user()->roles->first()->name == 'Jefe Departamento') {
            $projects = Project::whereHas('departments', function ($q) {
                $q->where('department_id', '=', Auth::user()->area->department->id);
            })->get();

        } else if (Auth::user()->roles->first()->name == 'Jefe Area') {
            $projects = Project::whereHas('areas', function ($q) {
                $q->where('area_id', '=', Auth::user()->area->id);
            })->get();
        } else if (Auth::user()->roles->first()->name == 'Jefe Proyecto'){
            $projects = Project::whereHas('users', function ($q) {
                $q->where('user_id', '=', Auth::id());
            })->get();
        } else if (Auth::user()->roles->first()->name == 'Practicante'){
            $projects = Project::whereHas('areas', function ($q) {
                $q->where('area_id', '=', Auth::user()->area->id);
            })->get();
        }

        $clients = Client::all();
        $tasks = Task::all();
        $colabs = User::where('area_id',Auth::user()->area->id)->get();
        $total_user = User::all();
        return view('welcome', compact('areas','goals','users','departments','projects','clients','tasks','colabs','total_user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
