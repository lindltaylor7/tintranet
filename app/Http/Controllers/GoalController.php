<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Goal;
use Illuminate\Http\Request;

/**
 * Class GoalController
 * @package App\Http\Controllers
 */
class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goals = Goal::paginate();
        $areas = Area::pluck('name','id');

        return view('goal.index', compact('goals','areas'))
            ->with('i', (request()->input('page', 1) - 1) * $goals->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $goal = new Goal();
        return view('goal.create', compact('goal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $request->merge([
            'partial_quantity' => '0'
        ]); 
        request()->validate(Goal::$rules);
      
            
        $goal = Goal::create($request->all());


        return redirect()->route('goals.index')
            ->with('success', 'Goal created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $goal = Goal::find($id);

        return view('goal.show', compact('goal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $goal = Goal::find($id);

        return view('goal.edit', compact('goal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Goal $goal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Goal $goal)
    {
        request()->validate(Goal::$rules);

        $goal->update($request->all());

        return redirect()->route('goals.index')
            ->with('success', 'Goal updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $goal = Goal::find($id)->delete();

        return redirect()->route('goals.index')
            ->with('success', 'Goal deleted successfully');
    }
}
