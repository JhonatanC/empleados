<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\UserRequest;

use App\User;
use App\Area;
use App\Role;
use App\EmpleadoRol;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('empleados.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::all();
        $roles = Role::all();
        return view('empleados.create',compact('roles','areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        // return $validated = $request->validated();
        // return $request->all();

        $user = new User();

        $user->nombre = $request->all()['nombre'];
        $user->email = $request->all()['email'];
        $user->sexo = $request->all()['sexo'];
        $user->boletin = $request->all()['boletin'];
        $user->area_id = $request->all()['area_id'];
        $user->save();

        $getRoles = $request->rol_id;
        if($getRoles > 0){
            for($i = 0; $i <= count($getRoles) - 1; $i++){
                $empleadoRol = new EmpleadoRol();
                $empleadoRol->user_id = $user->id;
                $empleadoRol->rol_id = $getRoles[$i];
                $empleadoRol->save();
            }
        }

        return redirect()->route('users.index')->with('info','El usuario fue guardado');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('empleados.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        $areas = Area::all();
        return view('empleados.edit',compact('user','roles','areas'));
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
        $user = User::find($id);
        if( !isset( $request->all()['boletin']) ){

            $user->nombre = $request->all()['nombre'];
            $user->email = $request->all()['email'];
            $user->sexo = $request->all()['sexo'];
            $user->boletin = $request->all()['boletin'] = 'No';
            $user->area_id = $request->all()['area_id'];

            $user->save();
            return redirect()->route('users.index')->with('info','El usuario fue actualizado');
        } else {
            $user->nombre = $request->all()['nombre'];
            $user->email = $request->all()['email'];
            $user->sexo = $request->all()['sexo'];
            $user->boletin = $request->all()['boletin'] = 'Si';
            $user->area_id = $request->all()['area_id'];

            $user->save();
            return redirect()->route('users.index')->with('info','El usuario fue actualizado');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return back()->with('info','El usuario fue eliminado');
    }
}
