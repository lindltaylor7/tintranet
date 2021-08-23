<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
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
        $users = User::find(Auth::id());
        $projects = Project::all();
        $clients = Client::all();
        $tasks = Task::all();
        
        return view ('proyectos.index', compact('projects','users','clients','tasks'));
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
        $users = User::find(Auth::id());
        $projects = Project::all();
        $project = Project::where('id',$id)->first();
        
        return view ('proyectos.index', compact('projects','users','project'));
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

        $project = Project::where('id',$id)->first();
        $project->update($request->all());

        return redirect()->route('proyectos', $project)->with('actualizar_proyecto','Actualización correcta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::where('id',$id)->first();
        $project->delete();

        return redirect()->back()->with('borrar_proyecto','Eliminación exitosa');
    }
}
