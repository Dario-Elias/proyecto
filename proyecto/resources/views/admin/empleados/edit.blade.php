@extends('layouts.app')

@section('content')

<div class="col-sm-offset-3 col-sm-6">
    <div class="col-sm-offset-3 col-sm-6">
    <div class="panel-title">
        <h1>Empleados</h1>

    </div>
     </div>
    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->


    

     <!-- New Task Form -->
        <form action="/admin_Empleado/{{$empleados->id}}/update" method="POST" >
            {{ csrf_field() }}

            <input type="hidden" name="_method" value="patch">







              <div class="form-group">
                <label for="cui" class="col-sm-3 control-label">DPI</label>
                <input type="text" name="cui" value="{{$empleados->cui}}"  class="form-control">
            </div>

            <div class="form-group">
                <label for="nombre" class="col-sm-3 control-label">NOMBRE</label>
                <input type="text" name="nombre" value="{{$empleados->nombre}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="apellido" class="col-sm-3 control-label">APELLIDO</label>
                <input type="text" name="apellido" value="{{$empleados->apellido}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">EMAIL</label>
                <input type="text" name="email" value="{{$empleados->email}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="direccion" class="col-sm-3 control-label">DIRECCION</label>
                <input type="text" name="direccion" value="{{$empleados->direccion}}" class="form-control">
            </div>

             <div class="form-group">
                <label for="telefono_casa" class="col-sm-3 control-label">TELEFONO DE CASA</label>
                <input type="text" name="telefono_casa" value="{{$empleados->telefono_casa}}" class="form-control">
            </div>

             <div class="form-group">
                <label for="telefono_movil" class="col-sm-3 control-label">TELEFONO MOVIL</label>
                <input type="text" name="telefono_movil" value="{{$empleados->telefono_movil}}" class="form-control">
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
        <form  action="/admin_Empleado/remove/{{$empleados->id}}" method="POST" >
            {{ csrf_field() }}

             <input type="hidden" name="_method" value="delete">

             <input type="submit" value="Eliminar Registro">

        </form>
                 <a href="{{ '/admin_Empleado/show' }}"> Regresar</a>

    
    </div>
</div>


@endsection 