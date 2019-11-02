@extends('layouts.app')

@section('content')

<div class="col-sm-offset-3 col-sm-6">
    <div class="col-sm-offset-3 col-sm-6">
    <div class="panel-title">
        <h4>CREACION DE PRODUCTOS</h4>

    </div>
     </div>
    

    <div class="panel-body">
      


    

     <!-- New Task Form -->
        <form action="/admin_Producto/save" method="POST" >
            {{ csrf_field() }}

            <!-- Task Name -->


            <div class="form-group">
                <label for="codigo" class="col-sm-3 control-label">CODIGO DE PRODUCTO</label>
                <input type="text" name="codigo"  class="form-control">
            </div>

            <div class="form-group">
                <label for="nombre" class="col-sm-3 control-label">NOMBRE</label>
                <input type="text" name="nombre" class="form-control">
            </div>

            <div class="form-group">
                <label for="proveedor" class="col-sm-3 control-label">PROVEEDOR</label>
                <input type="text" name="proveedor" class="form-control">
            </div>

            <div class="form-group">
                <label for="ubicacion" class="col-sm-3 control-label">UBICACION</label>
                <input type="text" name="ubicacion"  class="form-control">
            </div>

            <div class="form-group">
                <label for="costo" class="col-sm-3 control-label">COSTO</label>
                <input type="text" name="costo" class="form-control">
            </div>


            <div class="form-group">
                <label for="precio_venta" class="col-sm-3 control-label">PRECIO DE VENTA</label>
                <input type="text" name="precio_venta" class="form-control">
            </div>




            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> REGISTRAR PRODUCTO
                    </button>
                </div>
            </div>

                <div class="links">
                    <a href="{{ '/admin_Producto/' }}"> Regresar</a>
                    <input type="reset" name="Borrar" values="Borrar">
                </div>
        </form>
    
    </div>
</div>


@endsection 