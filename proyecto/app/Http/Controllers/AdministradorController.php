<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;
use App\admin;
use App\tienda;
use App\admin\tiendas;


class AdministradorController extends Controller
{
    public function __construct(){
    	$this->middleware('EsAdmin');

    }

    public function index(){
    	return view ("admin.tiendas.index");
    }

    public function create()
    {
        return view ("admin.tiendas.create");
    }

        public function edit($id)
    {
        $tienda=tienda::findOrFail($id);
        return view ("admin.tiendas.edit",compact("tienda"));
    }

        public function store(Request $request)
    {

        $tienda= new tienda;
        $tienda->tienda=$request->tienda;
        $tienda->nit=$request->nit;
        $tienda->encargado_id=$request->encargado_id;
        $tienda->ubicacion=$request->ubicacion;
        $tienda->capacidad=$request->capacidad;
        $tienda->save();

        return view("admin.tiendas.index");

    }

        public function show()
    {
        $tienda=tienda::all();
        return view ("admin.tiendas.show",compact("tienda"));

    }

        public function update(Request $request, $id)
    {
        $tienda=tienda::findOrFail($id);
        $tienda->update($request->all());
        return redirect("/admin/show");
    }

        public function destroy($id)
    {
        $tienda=tienda::findOrFail($id);
        $tienda->delete();
        return redirect("/admin/show");

    }

}
