<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\UserRequest;

use App\User;
use App\Role;

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
        $roles = Role::all();
        return view('empleados.create',compact('roles'));
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
        // return $validated;
        // return $request->all();

        $user = new User();
        // dd($user);
        // dd($request->all());
        // dd($request->all()['nombre']);
        // return $validated = $request->validated();

        $user->nombre = $request->all()['nombre'];
        $user->email = $request->all()['email'];
        $user->sexo = $request->all()['sexo'];
        $user->boletin = $request->all()['boletin'];
        $user->area_id = $request->all()['area_id'];

        $user->save();
        // $user->nombre = $request->all();

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
        return view('empleados.edit',compact('user','roles'));
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
            // $user->boletin = $request->all()['boletin'];
            $user->area_id = $request->all()['area_id'];

            $user->save();
            return redirect()->route('users.index')->with('info','El usuario fue actualizado');
        } else {
            $user->nombre = $request->all()['nombre'];
            $user->email = $request->all()['email'];
            $user->sexo = $request->all()['sexo'];
            $user->boletin = $request->all()['boletin'] = 'Si';
            // $user->boletin = $request->all()['boletin'];
            $user->area_id = $request->all()['area_id'];

            $user->save();
            return redirect()->route('users.index')->with('info','El usuario fue actualizado');
        }

        // die();
        // dd($user);
        
        // dd($request->all()['nombre']);
        // return $validated = $request->validated();

        // $user->nombre = $request->all()['nombre'];
        // $user->email = $request->all()['email'];
        // $user->sexo = $request->all()['sexo'];
        // $user->boletin = $request->all()['boletin'];
        // $user->area_id = $request->all()['area_id'];

        // $user->save();
        // $user->nombre = $request->all();
        // return redirect()->route('users.index')->with('info','El usuario fue actualizado');

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
