<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use App\Models\Statu;
use App\Models\Task;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $tasks = Task::all();
        $clients = Client::all();
        $projects = Project::all();
        $status=Statu::all()->where('type',2);
        $status1=Statu::all()->where('type',1);

        return view ('tarea.index', compact('tasks','users','clients','projects','status','status1'));
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
            'project_id' => 'required',
            'user_id' => 'required'
        ]);
        $request->merge([
            'status_id' => '6'
        ]);
        $tasks = Task::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $status=Statu::all()->where('type',2);
        compact('status');
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
        $tasks= Task::where('id',$id)->first();
        $date = Carbon::now()->format("Y-m-d");

        if ($request->status_id == 8)
        {
            $request->merge(['delivery_date' => $date]);
        }

        
        $tasks->update($request->except(['_token','_method','fileTaskUpdate']));

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
        $categoria = Task::where('id',$id)->first();
        $categoria ->files()->delete();
        $categoria->delete();
        return redirect()->back()->with('EliminarC','Tarea');
    }
}
