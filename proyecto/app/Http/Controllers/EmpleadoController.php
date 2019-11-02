<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;
use App\empleado;
use App\admin;
use App\tienda;
use App\admin\tiendas;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
       $this->middleware('EsAdmin');

    }



    public function index()
    {
        return view ("admin.empleados.index");
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view ("admin.empleados.create");
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleados= new empleado;
        $empleados->cui=$request->cui;
        $empleados->nombre=$request->nombre;
        $empleados->apellido=$request->apellido;
        $empleados->email=$request->email;
        $empleados->direccion=$request->direccion;
        $empleados->telefono_casa=$request->telefono_casa;
        $empleados->telefono_movil=$request->telefono_movil;
        $empleados->save();

        return view("admin.empleados.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $empleados=empleado::all();
        return view ("admin.empleados.show",compact("empleados"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleados=empleado::findOrFail($id);
        return view ("admin.empleados.edit",compact("empleados"));
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
        $empleados=empleado::findOrFail($id);
        $empleados->update($request->all());
        return redirect("/admin_Empleado/show");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $empleados=empleado::findOrFail($id);
        $empleados->delete();
        return redirect("/admin_Empleado/show");
    }
}
