@extends('layouts.app')

@section('content')

<div class="col-sm-offset-3 col-sm-6">
    <div class="col-sm-offset-3 col-sm-6">
    <div class="panel-title">
        <h1>Productos</h1>

    </div>
     </div>
    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->


    

     <!-- New Task Form -->
        <form action="/admin_Producto/{{$productos->id}}/update" method="POST" >
            {{ csrf_field() }}

            <input type="hidden" name="_method" value="patch">






              <div class="form-group">
                <label for="codigo" class="col-sm-3 control-label">CODIGO DE PRODUCTO</label>
                <input type="text" name="codigo" value="{{$productos->codigo}}"  class="form-control">
            </div>

            <div class="form-group">
                <label for="nombre" class="col-sm-3 control-label">NOMBRE</label>
                <input type="text" name="nombre" value="{{$productos->nombre}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="proveedor" class="col-sm-3 control-label">PROVEEDOR</label>
                <input type="text" name="proveedor" value="{{$productos->proveedor}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="ubicacion" class="col-sm-3 control-label">UBICACION</label>
                <input type="text" name="ubicacion" value="{{$productos->ubicacion}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="costo" class="col-sm-3 control-label">CAPACIDAD</label>
                <input type="text" name="costo" value="{{$productos->costo}}" class="form-control">
            </div>

             <div class="form-group">
                <label for="precio_venta" class="col-sm-3 control-label">CAPACIDAD</label>
                <input type="precio_venta" name="precio_venta" value="{{$productos->precio_venta}}" class="form-control">
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Actualizar Registro
                    </button>
                </div>
            </div>


        </form>
        <form  action="/admin_Producto/remove/{{$productos->id}}" method="POST" >
            {{ csrf_field() }}

             <input type="hidden" name="_method" value="delete">

             <input type="submit" value="Eliminar Registro">

        </form>
                 <a href="{{ '/admin_Producto/show' }}"> Regresar</a>

    
    </div>
</div>


@endsection 