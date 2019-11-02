<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;
use App\producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        $this->middleware('EsUser');
    }
    public function index()
    {
        return view ("admin.productos.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("admin.productos.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productos= new producto;
        $productos->codigo=$request->codigo;
        $productos->nombre=$request->nombre;
        $productos->proveedor=$request->proveedor;
        $productos->ubicacion=$request->ubicacion;
        $productos->costo=$request->costo;
        $productos->precio_venta=$request->precio_venta;
        $productos->save();

        return view("admin.productos.index");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
         $productos=producto::all();
        return view ("admin.productos.show",compact("productos"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        $productos=producto::findOrFail($id);
        return view ("admin.productos.edit",compact("productos"));
    
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
        $productos=producto::findOrFail($id);
        $productos->update($request->all());
        return redirect("/admin_Producto/show");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productos=producto::findOrFail($id);
        $productos->delete();
        return redirect("/admin_Producto/show");
    }
}
