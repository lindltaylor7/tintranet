<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Console\StorageLinkCommand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
                'email' => 'required',
                'password' => 'required',
            ]);
    
            $request->merge([
                'status' => 1,
                'area_id' => 1,
                'password' => bcrypt($request->get('password'))
            ]);
    
            $users = User::create($request->all());
    
            $credenciales = $users->only('email','password');
            Auth::login($users);
            return redirect()->route('home',['id'=> Auth::id()]);
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
        $users = User::find($id);
        return view('usuario_perfil.usuario_perfil', compact('users'));

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
        $user= User::where('id',$id)->first();
        $user->update($request->except(['_token','_method']));
       
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::where('id',$id)->first();
        $usuario->images()->delete();
        $usuario->delete();

        return redirect()->back()->with('borrar_usuario','Borrado completo');
    }
}
