<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Client;
use App\Models\Project;
use App\Models\Statu;
use App\Models\Task;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = Area::all();
        $users = User::find(Auth::id());
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
        //$completed = Task::completed(1)->get();
        $colabs = User::where('area_id',Auth::user()->area->id)->get();
        $status=Statu::all()->where('type',2);
        $status1=Statu::all()->where('type',1);

        return view('proyectos.index', compact('projects', 'users', 'clients', 'tasks','colabs','areas','status','status1'));
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

        $request->validate([
            'name' => 'required',
            'start_date' => 'required',
            'final_date' => 'required',
            'client_id' => 'required'
        ]);

        $request->merge([
            'status_id' => '1'
        ]);

        $project = Project::create($request->all());

        $project->users()->attach([
            'user_id' => Auth::id()
        ]);

        $project->areas()->attach($request->areas);

        $project->departments()->attach([
            'department_id' => Auth::user()->area->department->id
        ]);

        return redirect()->route('proyectos', $project);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find(Auth::id());
        $projects = Project::all();
        $project = Project::where('id', $id)->first();
        if (Auth::user()->roles->first()->name == 'Jefe Departamento'){
        $tasks = Task::where('project_id', $id)->get();
        }else if (Auth::user()->roles->first()->name == 'Administrador'){
        $tasks = Task::where('project_id', $id)->get();
        }else if (Auth::user()->roles->first()->name == 'Jefe Area'){
            $tasks = Task::where('project_id', $id)->get();
            }
        else{
        $tasks = Task::where('project_id', $id)->where('user_id',Auth::id())->get();
        }
        $users = $project->users;
        $status=Statu::all()->where('type',2);
        $status1=Statu::all()->where('type',1);
        
        return view('proyectos.show', compact('projects', 'user', 'project','tasks','users','status','status1'));
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
        $request->validate([
            'name' => 'required',
            'start_date' => 'required',
            'final_date' => 'required',
            'status_id' => 'required',
            'client_id' => 'required'
        ]);

        $project = Project::where('id', $id)->first();
        $date = Carbon::now()->format("Y-m-d");

        if ($request->status_id == 5)
        {
            $request->merge(['delivery_date' => $date]);
        }

        $project->update($request->all());

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::where('id', $id)->first();
        $project->delete();

        return redirect()->back()->with('borrar_proyecto', 'Eliminación exitosa');
    }
}
