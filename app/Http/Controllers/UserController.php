<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Department;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Console\StorageLinkCommand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->get('password') === $request->get('confirm_password')){
            $request->validate([
                'name' => 'required',
                'email' => 'required|unique:users'
            ]);

            $request->merge([
                'status' => 1,
                'password' => bcrypt('password')
            ]);

            $users = User::create($request->all());
            $users->assignRole('Practicante');

            return redirect()->back();
        }

        throw ValidationException::withMessages([
            'confirm_password' => __('auth.password')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuarios = User::all();
        $users = User::find($id);
        $departments =  Department::all();
        $areas = Area::all();

        $this->authorize('profile', $users);

        $roles = Role::all();
        return view('usuario_perfil.usuario_perfil', compact('users','usuarios','roles','departments','areas'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        
        $user= User::where('id',$id)->first();

        $user->update($request->except(['_token','_method']));

        if($request->roles){
            $user->roles()->sync($request->roles);
        }


        if ($request->file('fileUserUpdate')) {
            $user->files()->delete();
            $url = Storage::disk('public')->put('usuarios', $request->file('fileUserUpdate'));
            $user->files()->create([
                'name' => 'foto' ,
                'clsf'=> 'imagen',
                'url' => $url
            ]);
        }

        return redirect()->back();
    }



    public function inactive($id)
    {
        $usuario = User::find($id);
        $usuario->update(['status' => 0]);
        $usuario->save();

        return redirect()->back()->with('DesactivarUsuario','Actualizaci??n completa');
    }

    public function active($id)
    {
        $usuario = User::find($id);
        $usuario->update(['status' => 1]);
        $usuario->save();

        return redirect()->back()->with('ActivarUsuario','Actualizaci??n completa');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::where('id',$id)->first();
        $usuario->files()->delete();
        $usuario->delete();

        return redirect()->back()->with('borrar_usuario','Borrado completo');
    }
}
