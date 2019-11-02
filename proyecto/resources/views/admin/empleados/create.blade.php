@extends('layouts.app')

@section('content')

<div class="col-sm-offset-3 col-sm-6">
    <div class="col-sm-offset-3 col-sm-6">
    <div class="panel-title">
        <h4>CREACION DE EMPLEADOS</h4>

    </div>
     </div>
    

    <div class="panel-body">
      

    

     <!-- New Task Form -->
        <form action="/admin_Empleado/save" method="POST" >
            {{ csrf_field() }}


            <div class="form-group">
                <label for="cui" class="col-sm-3 control-label">DPI</label>
                <input type="text" name="cui"  class="form-control">
            </div>

            <div class="form-group">
                <label for="nombre" class="col-sm-3 control-label">NOMBRE</label>
                <input type="text" name="nombre" class="form-control">
            </div>

            <div class="form-group">
                <label for="apellido" class="col-sm-3 control-label">APELLIDO</label>
                <input type="text" name="apellido" class="form-control">
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">EMAIL</label>
                <input type="text" name="email"  class="form-control">
            </div>

            <div class="form-group">
                <label for="direccion" class="col-sm-3 control-label">DIRECCION</label>
                <input type="text" name="direccion" class="form-control">
            </div>


            <div class="form-group">
                <label for="telefono_casa" class="col-sm-3 control-label">TELEFONO CASA</label>
                <input type="text" name="telefono_casa" class="form-control">
            </div>

            <div class="form-group">
                <label for="telefono_movil" class="col-sm-3 control-label">TELEFONO MOVIL</label>
                <input type="text" name="telefono_movil" class="form-control">
            </div>



            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> REGISTRAR PRODUCTO
                    </button>
                </div>
            </div>

                <div class="links">
                    <a href="{{ '/admin_Empleado/' }}"> Regresar</a>
                    <input type="reset" name="Borrar" values="Borrar">
                </div>
        </form>
    
    </div>
</div>


@endsection 
